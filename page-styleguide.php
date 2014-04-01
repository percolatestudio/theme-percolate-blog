<?php
  /*
  Template Name: Styleguide
  */
  get_header();
?>

<header class="default">
  <h1 class="page-title">Styleguide</h1>
  <div class="list-horiz">
    <a href="#typography" class="nochrome">Typography</a> <span class="bullet"></span>
    <a href="#colors" class="nochrome">Colors</a> <span class="bullet"></span>
    <a href="#buttons" class="nochrome">Buttons</a> <span class="bullet"></span>
    <a href="#icons" class="nochrome">Icons</a> <span class="bullet"></span>
    <a href="#forms" class="nochrome">Forms</a> <span class="bullet"></span>
    <a href="#links" class="nochrome">Links</a> <span class="bullet"></span>
    <a href="#formatting" class="nochrome">Formatting</a>
  </div>
</header>

<section class="section-std">

  <div id="typography" class="module">
  <h5 class="subtitle">Typography</h5>
  <ul class="two-up">
    <li><h6>Headings</h6><div class="font-m1">Lora</div></li>
    <li><h6>Body</h6><div class="font-m1 type-secondary">Source Sans Pro</div></li>
  </ul>
  <ul class="two-up horiz">
    <li>
      <h6>Weights</h6>
      <div class="font-m1 light">300Light &nbsp;&nbsp;</div>
      <div class="font-m1 regular">400Regular &nbsp;&nbsp;</div>
      <div class="font-m1 bold">600Bold</div>
    </li>
  </ul>
  <hr>
  <ul class="two-up">
    <li><h6>l3 - 64/68 </h6><div class="font-l3">Wild Blue</div></li>
    <li><h6>l2 - 56/60</h6><div class="font-l2">Transcend</div></li>
    <li><h6>l1 - 48/52</h6><div class="font-l1">Yonder</div></li>
    <li><h6>m3 - 40/44</h6><div class="font-m3">Explore</div></li>
    <li><h6>m2 - 32/36</h6><div class="font-m2">Excite</div></li>
    <li><h6>m1 - 24/28 </h6><div class="font-m1">Great</div></li>
    <li><h6>s3 - 16/24</h6><div class="font-s3">Space</div></li>
    <li><h6>s2 - 14/22</h6><div class="font-s2">Knows</div></li>
    <li><h6>s1 - 12/18</h6><div class="font-s1">No Boundaries</div></li>
  </ul>
  <ul class="two-up">
    <br>
    <li>
      <h6>16/24</h6>
      <div class="font-s3"><em>Body</em> Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. </div>
    </li>
    <li>
      <h6>14/22</h6>
      <div class="font-s2"><em>Subtext</em> Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. </div>
    </li>
    <li>
      <h6>12/18</h6>
      <div class="font-s1"><em>Fineprint</em> Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. </div>
    </li>
  </ul>
</div>

  <div id="colors" class="module">
  <h5 class="subtitle">Colors</h5>
  <ul class="two-up">
    <li class="color-primary">#6064ad</li>
    <li class="color-secondary">#FA8D3B</li>
    <li class="color-tertiary">#2ca699</li>
    <li class="color-complementary">#000000</li>
  </ul>
  <ul class="two-up">
    <li class="color-alert">#ff4800</li>
    <li class="color-note">#ffffe4</li>
  </ul>
  <hr>
  <ul class="two-up">
    <li class="color-empty">#ffffff</li>
    <li class="color-raw">#f1f1f1</li>
    <li class="color-rare">#eeeeee</li>
    <li class="color-medium-rare">#999999</li>
    <li class="color-medium">#666666</li>
    <li class="color-medium-well">#444444</li>
    <li class="color-well">#313140</li>
  </ul>
  <ul class="two-up">
    <li class="color-facebook">#3b5998</li>
    <li class="color-google">#58586d</li>
    <li class="color-yahoo">#9238ab</li>
    <li class="color-twitter">#46c8f5</li>
    <li class="color-stumble">#e2451c</li>
    <li class="color-pinterest">#cc2127</li>
    <li class="color-youtube">#da4337</li>
  </ul>
</div>

  <div id="buttons" class="module">
  <h5 class="subtitle">Buttons</h5>
  <a class="btn-primary">Primary</a>
  <a class="btn-secondary">Secondary</a>
  <a class="btn-tertiary">Tertiary</a>
  <button class="btn-cmd-line"> npm install -g meteorite</button>
  <div class="btn-group">
    <a class="btn-toggle active">Active</a>
    <a class="btn-toggle">Toggle</a>
  </div>
  <div class="btn-group">
    <a class="btn-toggle active">Active</a>
    <a class="btn-toggle">Toggle</a>
    <a class="btn-toggle">Toggle</a>
  </div>
  <div class="btn-group">
    <a class="btn-toggle active">Active</a>
    <a class="btn-toggle">Toggle</a>
    <a class="btn-toggle">Toggle</a>
    <a class="btn-toggle">Toggle</a>
  </div>
</div>

  <div id="icons" class="module">
  <h5 class="subtitle">Icons</h5>
  <span class="icon-percolate"></span>
  <span class="icon-atmosphere"></span>
  <span class="icon-arrow-down"></span>
  <span class="icon-arrow-down-thin"></span>
  <span class="icon-close-thin"></span>
  <span class="icon-circle-empty"></span>
  <span class="icon-star"></span>
  <span class="icon-ellipses"></span>
  <span class="icon-download"></span>
  <span class="icon-proceed"></span>
  <span class="icon-list"></span>
  <span class="icon-search"></span>
  <span class="icon-github"></span>
</div>

  <div id="forms" class="module">
  <h5 class="subtitle">Forms</h5>

  <form class="two-up">
    <label for="default-input">First name</label>
    <input name="default-input" type="text" size="20" value="" placeholder="First name"/>

    <label for="default-input2">Last name</label>
    <input name="default-input2" type="text" size="20" value="" placeholder="Last name"/>

    <label for="default-input3"><span class="alert">Email is missing</span></label>
    <input name="default-input3" type="text" size="20" value="" class="alert" placeholder="Email"/>

    <label for="description">Description</label>
    <textarea name="description" rows="4" cols="20" placeholder="Nostalgic futurist"></textarea>

    <label for="aviators">Gender</label>
    <span class="a-select">
      <select id="aviators" name="aviators">
        <option selected value="1">Amelia Earhart</option>
        <option value="2">Charles Lindbergh</option>
      </select>
    </span>

    <label class="checkbox">
      <input type="checkbox" value=""/> Remember me
    </label>

    <label class="radio">
      <input type="radio" name="group1" value=""/> Radio
    </label>

    <label class="radio">
      <input type="radio" name="group1" value=""/> Radio
    </label>

    <button class="btn-primary">Submit</button>
  </form>

  <div class="two-up">
    <form>
      <div class="input-symbol right">
        <input name="mailing-list" class="inverse" type="email" size="20" value="" placeholder="Add your email"/>
        <button form="mailing-list" type="submit" class="icon-proceed inverse"></button>
      </div>
    </form>
    <span class="a-select">
      <select id="aviators" name="aviators">
        <option selected value="1">Amelia Earhart</option>
        <option value="2">Charles Lindbergh</option>
      </select>
    </span>
    <span class="a-select small">
      <select id="aviators" name="aviators">
        <option selected value="1">Amelia Earhart</option>
        <option value="2">Charles Lindbergh</option>
      </select>
    </span>
    <span class="a-select nochrome">
      <select id="stuff" name="timerange">
        <option selected value="1">Today</option>
        <option value="2">This Week</option>
        <option value="2">This Month</option>
        <option value="2">This Year</option>
      </select>
    </span>
    <span class="a-select nochrome small">
      <select id="stuff" name="timerange">
        <option selected value="1">Today</option>
        <option value="2">This Week</option>
        <option value="2">This Month</option>
        <option value="2">This Year</option>
      </select>
    </span>
  </div>

</div>

<div id="links" class="module">
  <h5 class="subtitle">Links</h5>
  <a>Standard link</a>
  <a class="inverse">Inverse link</a>
</div>

<div id="lists" class="module">
  <h5 class="subtitle">Lists</h5>
  <ul class="two-up">
    <li>
      <div class="list-horiz">
        <a>User Interface</a> <span class="bullet"></span>
        <a>User Experience</a> <span class="bullet"></span>
        <a>Registration</a>
      </div>
      <div class="list-horiz small">
        <a>User Interface</a> <span class="bullet"></span>
        <a>User Experience</a> <span class="bullet"></span>
        <a>Registration</a>
      </div>
    </li>
    <li>
      <div class="list-vertical">
        <a>Lorem Ipsum</a>
        <a>Dolor Sit</a>
        <a>Amet Consectatur</a>
        <a>Vestibulum</a>
        <a>Sek Sr</a>
      </div>
    </li>
  </ul>
</div>

<div id="misc" class="module">
  <h5 class="subtitle">Misc</h5>
</div>

  <div id="formatting" class="formatting module">
  <h1>Heading 1</h1>
  <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa.</p>

  <h1>Heading 1</h1>
  <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.</p>

  <h2>Heading 2</h2>
  <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec <code>varius</code> quam felis, ultricies nec, pellentesque eu, pretium quis, sem.</p>
  <img class="alignleft" src="http://placehold.it/150x150">
  <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec <code>varius</code> quam felis, ultricies nec, pellentesque eu, pretium quis, sem.</p>
  <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec <code>varius</code> quam felis, ultricies nec, pellentesque eu, pretium quis, sem.</p>
  <figure>
    <pre>$sudo Lorem ipsum dolor sit amet
npm install dolor sit amet
mrt install iron-router</pre>
    <figcaption>Copy and paste this code</figcaption>
  </figure>

  <h2>Heading 2</h2>
  <img class="alignright" src="http://placehold.it/150x150">
  <p>Lorem ipsum dolor sit amet, <a href="#">consectetuer adipiscing</a> elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.</p>
  <p>Lorem ipsum dolor sit amet, elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.</p>

  <h2>Heading 2</h2>
  <aside><span class="type">Note:</span> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed varius imperdiet ant.</aside>
  <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.</p>
  <blockquote>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed varius imperdiet anteLorem ipsum dolor sit amet, consectetur adipiscing elit.</blockquote>
  <img class="aligncenter" src="http://placehold.it/730x100">
  <h3>Heading 3</h3>
  <p>Lorem <strike>ipsum</strike> dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.</p>

  <div class="note"><em>Attention</em> dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes.</div>

  <h4>Heading 4</h4>
  <p>Lorem <strike>ipsum</strike> dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.</p>
</div>

</section>
</div>

<?php get_footer(); ?>