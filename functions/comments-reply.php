<?php
/**
 * Use an HTML button element for the cancel comment reply link.
 */
function cancel_comment_reply_button($html, $link, $text) {
    $style = isset($_GET['replytocom']) ? '' : ' style="display:none;"';
    $button = '<a id="cancel-comment-reply-link" class="btn-tertiary" ' . $style . '>';
    return $button . $text . '</a>';
}

add_action('cancel_comment_reply_link',
           'cancel_comment_reply_button', 10, 3);
?>