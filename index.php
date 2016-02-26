<?php
  include_once('includes/header.php');
?>
  <!-- creating a portfolio gallery with phone 3 col, tablet 6 col, desktop 12 col -->
<div class="card col-md-4">
  <div class="card-img-top" alt="What, Gulp?"><i class="fa fa-terminal fa-4x"></i></div>
  <div class="card-block">
    <h4 class="card-title">What is Gulp?</h4>
    <p class="card-text"><span class="bolded">G</span>ulp in short, lets you increase your productivity time by simplifying tasks in your every day development environment.
    </p>
    <p> Similar to Grunt, Gulp is the new way to go, with built in file watching, control your sass, implement browser refresh methods, run tests on your code, lint and concatinate, minify and more!</p>
    <h2>Gulp Cheet Sheet</h2>
    <a href="../images/en-js-p1.pdf" ><img src="../images/en-js-p1.pdf"></a>
  </div>
</div>
<div class="card col-md-4">
  <div class="card-img-top" alt="Functions"><i class="fa fa-code fa-4x"></i></div>
  <div class="card-block">
    <h4 class="card-title">5 Functions</h4>
    <p class="card-text"><span class="bolded">G</span>ulp is really light weight and easy to use. The main 5 functions you need to learn are:</p>
    <ul>
      <li>
      <strong>Gulp.task(name, fn)</strong></li> <p> Register function with a name.</p>
      <li><strong>gulp.run(task)</strong></li> <p> Runs your tasks</p>
      <li><strong>gulp.watch(glob, fn)</strong></li> <p> Runs a function when a file change occors globally</p>
      <li><strong>gulp.src(glob)</strong></li> <p>Allows matching of globs such as Strings or an Array of data that returns a stream of vinyl files that can be piped to plugins.</p> <a href="https://github.com/gulpjs/vinyl-fs#what-is-vinyl">What's Vinyl?</a> <a href="https://nodejs.org/api/stream.html#stream_readable_pipe_destination_options">What is this, Pipe?</a>
      <li><strong>gulp.dest(folder)/h3></strong></li> <p>Returns a writable system: File objects piped to this are saved to the file system.</p>
    </ul>
  </div>
</div>
<div class="card col-md-4">
  <div class="card-img-top" alt="What Else?"><i class="fa fa-github fa-4x"></i></div>
  <div class="card-block">
    <h4 class="card-title">What Else Can Gulp Do?</h4>
    <p class="card-text"><span class="bolded">T</span>here are many features you can add that are usually no longer than 20 lines. Some other features include:</p>
    <ul>
      <li>
        <strong>
          gulp-jshint
        </strong>
      </li> 
        <p> This analysis tool checks to see if your JavaScript compiles with coding rules and helps prevent writing bad code.
        </p>
      <li>
        <strong>
          gulp-uglify
        </strong>
      </li> 
        <p>Uglify Lets you compress images to save space on your site file, reducing server latency.
        </p>
      <li>
        <strong>
          gulp-cache
        </strong>
      </li> 
        <p>This caches images so only changed images are compressed.
        </p>
      <li>
        <strong>
          gulp-autoprefixer
        </strong>
      </li> 
        <p>AutoPrefixer allows you to write your CSS rules without vendor prefixes such as: -webkit -moz -ms.
        </p> 
          <a href="http://autoprefixer.github.io/">Autoprefix Demo</a>
      <li>
        <strong>
          gulp.livereload
        </strong>
      </li> 
        <p>Live Reload refreshes your browser on edit. 
        </p>
      </ul>
        <a href="http://livereload.com/">LiveReload.com</a>
  </div>
</div>
<br>
  <div class="second">
  <div class="install">
    
      <h2>So here is how we can install Gulp with NPM.</h2>
        <p class="p2">
        First things first, have node.js installed, which includes npm package manager. <br>
        Then go to your project folder / root directory you can install packages to safely.
        <br>
        <br>
        Open up your Terminal / Command promt window and type in the following.
        <br>
        <ul class="codes">
          <li><p>- cd myproject</p></li>
          <li><p>- npm install --save-dev gulp</p></li>
        </ul>
            <p class="p2">
              This method will install the gulp node module locally instead of globally.
            </p>

            <h3>Create Gulp File</h3>
            <p class="p2">
              In the same folder, we need to set up our tasks by creating a document named gulpfile.js<br>
              which we can then set up a basic task in like below.
            </p>
        <ul class="codes">
          <li>- var gulp = require('gulp');</li>
          <li>gulp.task('hello-world', function(){
              console.log('hello world');
              });
        </li>
        </ul>
        <p class="p2">
          <span class="code">require</span> is a function built into node, more examples of code could be as follows.
        </p>
        <div class="screenshot"></div>
    </p>
  </div>

  <div class="card2 col-md-4">
  <div class="card-img-top" alt="Gulp Feb 2016"><i class="fa fa-calendar fa-4x"></i></div>
  <div class="card-block">
  <h2>Gulp:</h2>
    <p class="p2"><span class="bolded">A</span>s of Feb 25th, 2016 There are a total of 2213 gulp plugins available to download. Gulp is by far one of the most easy to use npm modules out there. It is gaining popularity due to it's light weight installation and the method of how it performs.
    </p>
    <br>
    <h2>Pipe</h2>
    <p class="p2">
      <span class="bolded">W</span>hen you hear pipe, for the first time, or even Gulp for that matter, you might be asking what the heck?..
        <br>
        Streams use .pipe() to pair incoming data with outgoing data.
      </p> 
      <br>
        <ul class="codes">
            <li>src.pip(dst)</li>
        </ul>
      <br>
        <ul class="codes">
            <li>.pip(dst) </li><p class="p2"> returns dst so that you can chain together multiple .pipe() calls together</p>
        </ul>
      <br>
        <ul class="codes">
          <li>a.pipe(b).pipe(c).pipe(d)</li>
        </ul>
      <br>
        <p class="p2">Which is the same as:
        </p>
      <br>
        <ul class="codes">
          <li>a.pipe(b);</li>
          <li>a.pipe(c);</li>
          <li>a.pipe(d);</li>
        </ul>
      <br>
      <p class="p2">
        Here is an example of how you would pipe programs together on the command line.</p>
      <br>
        <ul class="codes">
          <li>
            a | b | c | d
          </li>
        </ul>
      <br>
      <p class="p2">
        except in node instead of the shell!
      </p>
  <br>
  </div>
</div>

<div class="card2 col-md-4">
  <div class="card-img-top" alt="Documentation"><i class="fa fa-book fa-4x"></i></div>
  <div class="card-block">
<h2>Gulp Documentation:</h2>
<ul>
  <li><a href="/gulpjs/gulp/blob/master/docs/getting-started.md">Getting Started</a><p class="p2"> How to get going with gulp</p></li>
  <li><a href="/gulpjs/gulp/blob/master/docs/API.md">API documentation</a><p class="p2"> Learn the ins and outs of using gulp</p></li>
  <li><a href="/gulpjs/gulp/blob/master/docs/CLI.md">CLI documentation</a><p class="p2"> Learn how to call tasks and use compilers</p></li>
  <li><a href="/gulpjs/gulp/blob/master/docs/writing-a-plugin/README.md">Writing a Plugin</a><p class="p2"> So you're writing a gulp plugin? Go here for the essential dos and don'ts.</p></li>
  <li><a href="https://github.com/bucaran/gulp-docs-es">Spanish documentation</a><p class="p2"> gulp en Español.</p></li>
  <li><a href="https://github.com/lisposter/gulp-docs-zh-cn">Simplified Chinese documentation</a><p class="p2"> gulp 简体中文文档.</p></li>
  <li><a href="https://github.com/preco21/gulp-docs-ko">Korean documentation</a><p class="p2"> gulp 한국어 참조 문서.</p></li>
</ul>
  </div>
  </div>

    <div class="card2 col-md-4">
  <div class="card-img-top" alt="FAQ"><i class="fa fa-question-circle fa-4x"></i></div>
  <div class="card-block">
  <h2>FAQ</h2>
    <p class="p2">
      See the <a href="https://github.com/gulpjs/gulp/blob/master/docs/FAQ.md">FAQ</a> for teh answers to commonly asked questions.
    </p>
    <br>
<h2>Articles</h2>
  <ul>
  <li><a href="http://tagtree.tv/gulp">Tagtree intro to gulp video</a></li>
  <li>
    <a href="https://github.com/substack/stream-handbook">Introduction to node.js streams</a></li>
  <li>
    <a href="http://www.youtube.com/watch?v=QgEuZ52OZtU">Video introduction to node.js streams</a></li>
  <li>
    <a href="http://markgoodyear.com/2014/01/getting-started-with-gulp/">Getting started with gulp (by @markgdyr)</a></li>
  <li>
    <a href="https://github.com/osscafe/gulp-cheatsheet">A cheatsheet for gulp</a></li>
  <li>
    <a href="http://blog.overzealous.com/post/74121048393/why-you-shouldnt-create-a-gulp-plugin-or-how-to-stop">Why you shouldn’t create a gulp plugin (or, how to stop worrying and learn to love existing node packages)</a></li>
  <li>
    <a href="http://slid.es/contra/gulp">Inspiration (slides) about why gulp was made</a></li>
  <li>
    <a href="http://www.smashingmagazine.com/2014/06/11/building-with-gulp/">Building With Gulp</a></li>
  <li>
    <a href="https://www.youtube.com/watch?v=dwSLFai8ovQ">Gulp - The Basics (screencast)</a></li>
  <li>
    <a href="http://www.youtube.com/playlist?list=PLRk95HPmOM6PN-G1xyKj9q6ap_dc9Yckm">Get started with gulp (video series)</a></li>
  <li>
  <a href="http://www.linuxuser.co.uk/tutorials/optimise-your-web-code-with-gulp-js">Optimize your web code with gulp</a></li>
  <li>
    <a href="https://scotch.io/tutorials/automate-your-tasks-easily-with-gulp-js">Automate Your Tasks Easily with Gulp.js</a></li>
</ul></div></div>
<?php include 'includes/footer.php';?>