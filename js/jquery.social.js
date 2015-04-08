/* jquery.social.js
 *
 * A dead simple social share jQuery plugin. Network data lifted from
 * social-likes (https://github.com/sapegin/social-likes).
 *
 * Usage:

  // the selector for your activating button
  $('[data-facebook=button]').social({
    network: 'facebook', // the desired network
    counter: '[data-facebook=counter]', // a selector for the counter element
    url: url // the url of your content
  });

 *
 * Released under the MIT licence by Zoltan Olah (Percolate Studio 2014)
 */

(function ( $ ) {
  // TODO: these should be able to be passed in
  var twitterTitle = encodeURIComponent( $('meta[name="twitter:title"]').attr('content') || document.title );
  var twitterAccount = encodeURIComponent( $('meta[name="twitter:creator"]').attr('content') || document.title );
  var hashTags = encodeURIComponent($('meta[property="article:tag"]').map(function(idx, x){ return $(x).attr('content'); }).get().join());

  var networks = {
    facebook: {
      // https://developers.facebook.com/docs/reference/fql/link_stat/
      counterUrl: 'https://graph.facebook.com/fql?q=SELECT+total_count+FROM+link_stat+WHERE+url%3D%22{url}%22&callback=?',
      convertNumber: function(data) {
        if (data && data.data[0])
          return data.data[0].total_count;

        return 0;
      },
      popupUrl: 'https://www.facebook.com/sharer/sharer.php?u={url}',
      popupWidth: 600,
      popupHeight: 500
    },
    twitter: {
      counterUrl: 'https://cdn.api.twitter.com/1/urls/count.json?url={url}&callback=?',
      convertNumber: function(data) {
        return data.count;
      },
      popupUrl: 'https://twitter.com/intent/tweet?url={url}&text=' + twitterTitle + ' by ' + twitterAccount +  '&hashtags=' + hashTags,
      popupWidth: 600,
      popupHeight: 450,
    },
    // only supports counters for now
    github: {
      counterUrl: 'https://api.github.com/repos/{prefix}/{url}',
      convertNumber: function(data) {
        return data.stargazers_count;
      }
    },
    hackernews: {
      counterUrl: 'http://hn.algolia.com/api/v1/search?tags=story&query={url}',
      // Logic lifted from: https://github.com/segmentio/hn-button.com/blob/master/lib/iframe/index.js
      convertNumber: function(data) {
        var points = 0;

        if (data.hits && data.hits[0]) {
          story = data.hits[0];
          points = story.points;
          // Store the story's objectId for later when the button is clicked
          this._storyObjectId = story.objectID;
        }

        return points;
      },

      popupUrlFn: function(url) {
        var id = this._storyObjectId;
        var base = 'https://news.ycombinator.com/';
        var href = id
          ? base + 'item?id=' + id
          : base + 'submitlink?u=' + encodeURIComponent(url) + '&t='
            + twitterTitle;

        return href;
      },

      popupWidth: 800,
      popupHeight: 600,
    }
  }

  // Opens a popup according to options
  var openPopup = function(options) {
    var network = networks[options.network];

    if (network.popupUrl) {
      var popupUrl = network.popupUrl.replace('{url}',
        encodeURIComponent(options.url));

      popItUp(popupUrl);
    } else if (network.popupUrlFn){
      popItUp(network.popupUrlFn(options.url));
    } else {
      console.error('Cant find popupUrl');
    }

    function popItUp(url) {
      var left = Math.round(screen.width / 2 - network.popupWidth / 2);
      var top = 0;

      if (screen.height > network.popupHeight) {
        top = Math.round(screen.height / 3 - network.popupHeight / 2);
      }

      var win = window.open(url, 'social', 'left=' + left + ',top=' + top
        + ',' + 'width=' + network.popupWidth + ',height=' + network.popupHeight
        + ',personalbar=0,toolbar=0,scrollbars=1,resizable=1');

      if (win) {
        win.focus();
        var timer = setInterval($.proxy(function() {
          if (!win.closed)
            return;

          clearInterval(timer);
          updateCounter(options);
        }, this), options.popopPollInterval);
      } else {
        // just go there if we can't open the popup
        location.href = url;
      }
    }

  }

  // Updates the counter according to options
  var updateCounter = function(options) {
    var network = networks[options.network];
    var counterUrl = network.counterUrl.replace('{url}',
      encodeURIComponent(options.url)).replace('{prefix}', options.prefix);

    $.getJSON(counterUrl, function(data) {
      try {
        var number = network.convertNumber(data);
        console.log('Social got ' + number + ' for ' + options.network);
        $(options.counter).html(number);
      } catch(e) {
        console.error('Social had error getting count for ' + options.network);
        throw e;
      }
    });
  }

  $.fn.social = function(options) {
    // defaults to facebook
    var options = $.extend({
      network: 'facebook',
      counter: '[data-facebook=counter]',
      url: '',
      popopPollInterval: 500, // ms to check whether popup is closed
    }, options );

    updateCounter(options);

    this.click(function() {
      openPopup(options);
    });

    return this;
  };
}(jQuery));