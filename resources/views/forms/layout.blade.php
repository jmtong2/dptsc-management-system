<x-app-layout>
<div class="container-fluid">
         <div class="row">
            <div class="col-sm-6 col-lg-6">
               <div class="card">
                  <div class="card-header d-flex justify-content-between">
                     <div class="header-title">
                        <h4 class="card-title">Basic Form</h4>
                     </div>
                  <div class="header-action">
                           <i  type="button" data-toggle="collapse" data-target="#form-element-1" aria-expanded="false" aria-controls="alert-1">
                              <svg width="20" height="20" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                 <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4" />
                              </svg>
                           </i>
                        </div>
                  </div>
                  <div class="card-body">
                     <div class="collapse" id="form-element-1">
                           <div class="card"><kbd class="bg-dark"><pre id="basic-form" class="text-white"><code>
&#x3C;form&#x3E;
   &#x3C;div class=&#x22;form-group&#x22;&#x3E;
      &#x3C;label for=&#x22;email&#x22;&#x3E;Email address:&#x3C;/label&#x3E;
      &#x3C;input type=&#x22;email&#x22; class=&#x22;form-control&#x22; id=&#x22;email1&#x22;&#x3E;
   &#x3C;/div&#x3E;
   &#x3C;div class=&#x22;form-group&#x22;&#x3E;
      &#x3C;label for=&#x22;pwd&#x22;&#x3E;Password:&#x3C;/label&#x3E;
      &#x3C;input type=&#x22;password&#x22; class=&#x22;form-control&#x22; id=&#x22;pwd&#x22;&#x3E;
   &#x3C;/div&#x3E;
   &#x3C;div class=&#x22;checkbox mb-3&#x22;&#x3E;
      &#x3C;label&#x3E;&#x3C;input type=&#x22;checkbox&#x22;&#x3E; Remember me&#x3C;/label&#x3E;
   &#x3C;/div&#x3E;
   &#x3C;button type=&#x22;submit&#x22; class=&#x22;btn btn-primary&#x22;&#x3E;Submit&#x3C;/button&#x3E;
   &#x3C;button type=&#x22;submit&#x22; class=&#x22;btn bg-danger&#x22;&#x3E;Cancel&#x3C;/button&#x3E;
&#x3C;/form&#x3E;
</code></pre></kbd></div>
                        </div>
                     <form>
                        <div class="form-group">
                           <label for="email">Email address:</label>
                           <input type="email" class="form-control" id="email1">
                        </div>
                        <div class="form-group">
                           <label for="pwd">Password:</label>
                           <input type="password" class="form-control" id="pwd">
                        </div>
                        <div class="checkbox mb-3">
                           <label><input type="checkbox"> Remember me</label>
                        </div>
                        <button type="submit" class="btn btn-primary mr-2">Submit</button>
                        <button type="submit" class="btn bg-danger">Cancel</button>
                     </form>
                  </div>
               </div>
               <div class="card">
                  <div class="card-header d-flex justify-content-between">
                     <div class="header-title">
                        <h4 class="card-title">Form Grid</h4>
                     </div>
                  <div class="header-action">
                           <i  type="button" data-toggle="collapse" data-target="#form-element-2" aria-expanded="false" aria-controls="alert-1">
                              <svg width="20" height="20" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                 <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4" />
                              </svg>
                           </i>
                        </div>
                  </div>
                  <div class="card-body">
                     <div class="collapse" id="form-element-2">
                           <div class="card"><kbd class="bg-dark"><pre id="form-grid" class="text-white"><code>
&#x3C;form&#x3E;
   &#x3C;div class=&#x22;row&#x22;&#x3E;
      &#x3C;div class=&#x22;col&#x22;&#x3E;
         &#x3C;input type=&#x22;text&#x22; class=&#x22;form-control&#x22; placeholder=&#x22;First name&#x22;&#x3E;
      &#x3C;/div&#x3E;
      &#x3C;div class=&#x22;col&#x22;&#x3E;
         &#x3C;input type=&#x22;text&#x22; class=&#x22;form-control&#x22; placeholder=&#x22;Last name&#x22;&#x3E;
      &#x3C;/div&#x3E;
   &#x3C;/div&#x3E;
&#x3C;/form&#x3E;
</code></pre></kbd></div>
                        </div>
                     <form>
                        <div class="row">
                           <div class="col">
                              <input type="text" class="form-control" placeholder="First name">
                           </div>
                           <div class="col">
                              <input type="text" class="form-control" placeholder="Last name">
                           </div>
                        </div>
                     </form>
                  </div>
               </div>
               <div class="card">
                  <div class="card-header d-flex justify-content-between">
                     <div class="header-title">
                        <h4 class="card-title">Textarea</h4>
                     </div>
                  <div class="header-action">
                           <i  type="button" data-toggle="collapse" data-target="#form-element-3" aria-expanded="false" aria-controls="alert-1">
                              <svg width="20" height="20" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                 <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4" />
                              </svg>
                           </i>
                        </div>
                  </div>
                  <div class="card-body">
                     <div class="collapse" id="form-element-3">
                           <div class="card"><kbd class="bg-dark"><pre id="Textarea" class="text-white"><code>
&#x3C;form&#x3E;
   &#x3C;div class=&#x22;form-group&#x22;&#x3E;
      &#x3C;label for=&#x22;exampleFormControlTextarea1&#x22;&#x3E; textarea&#x3C;/label&#x3E;
      &#x3C;textarea class=&#x22;form-control&#x22; id=&#x22;exampleFormControlTextarea1&#x22; rows=&#x22;3&#x22;&#x3E;&#x3C;/textarea&#x3E;
   &#x3C;/div&#x3E;
   &#x3C;button type=&#x22;submit&#x22; class=&#x22;btn btn-primary&#x22;&#x3E;Submit&#x3C;/button&#x3E;
   &#x3C;button type=&#x22;submit&#x22; class=&#x22;btn bg-danger&#x22;&#x3E;Cancel&#x3C;/button&#x3E;
&#x3C;/form&#x3E;
</code></pre></kbd></div>
                        </div>
                     <form>
                        <div class="form-group">
                           <label for="exampleFormControlTextarea1"> textarea</label>
                           <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary mr-2">Submit</button>
                        <button type="submit" class="btn bg-danger">Cancel</button>
                     </form>
                  </div>
               </div>
               <div class="card">
                  <div class="card-header d-flex justify-content-between">
                     <div class="header-title">
                        <h4 class="card-title">Input Telephone</h4>
                     </div>
                  <div class="header-action">
                           <i  type="button" data-toggle="collapse" data-target="#form-element-4" aria-expanded="false" aria-controls="alert-1">
                              <svg width="20" height="20" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                 <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4" />
                              </svg>
                           </i>
                        </div>
                  </div>
                  <div class="card-body">
                     <div class="collapse" id="form-element-4">
                           <div class="card"><kbd class="bg-dark"><pre id="input-telephone" class="text-white"><code>
&#x3C;form&#x3E;
   &#x3C;div class=&#x22;form-group&#x22;&#x3E;
      &#x3C;label for=&#x22;exampleInputphone&#x22;&#x3E;Teliphone Input&#x3C;/label&#x3E;
      &#x3C;input type=&#x22;tel&#x22; class=&#x22;form-control&#x22; id=&#x22;exampleInputphone&#x22; value=&#x22;1-(555)-555-5555&#x22;&#x3E;
   &#x3C;/div&#x3E;
   &#x3C;button type=&#x22;submit&#x22; class=&#x22;btn btn-primary&#x22;&#x3E;Submit&#x3C;/button&#x3E;
   &#x3C;button type=&#x22;submit&#x22; class=&#x22;btn bg-danger&#x22;&#x3E;Cancel&#x3C;/button&#x3E;
&#x3C;/form&#x3E;
</code></pre></kbd></div>
                        </div>
                     <form>
                        <div class="form-group">
                           <label for="exampleInputphone">Teliphone Input</label>
                           <input type="tel" class="form-control" id="exampleInputphone" value="1-(555)-555-5555">
                        </div>
                        <button type="submit" class="btn btn-primary mr-2">Submit</button>
                        <button type="submit" class="btn bg-danger">Cancel</button>
                     </form>
                  </div>
               </div>
               <div class="card">
                  <div class="card-header d-flex justify-content-between">
                     <div class="header-title">
                        <h4 class="card-title">Input Search</h4>
                     </div>
                  <div class="header-action">
                           <i  type="button" data-toggle="collapse" data-target="#form-element-5" aria-expanded="false" aria-controls="alert-1">
                              <svg width="20" height="20" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                 <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4" />
                              </svg>
                           </i>
                        </div>
                  </div>
                  <div class="card-body">
                     <div class="collapse" id="form-element-5">
                           <div class="card"><kbd class="bg-dark"><pre id="input-search" class="text-white"><code>
&#x3C;form&#x3E;
   &#x3C;div class=&#x22;form-group&#x22;&#x3E;
      &#x3C;label for=&#x22;search-text&#x22;&#x3E;Search&#x3C;/label&#x3E;
      &#x3C;input id=&#x22;search-text&#x22; type=&#x22;search&#x22; class=&#x22;form-control&#x22; required=&#x22;&#x22;&#x3E;
   &#x3C;/div&#x3E;
   &#x3C;button type=&#x22;submit&#x22; class=&#x22;btn btn-primary&#x22;&#x3E;Submit&#x3C;/button&#x3E;
   &#x3C;button type=&#x22;submit&#x22; class=&#x22;btn bg-danger&#x22;&#x3E;Cancel&#x3C;/button&#x3E;
&#x3C;/form&#x3E;
</code></pre></kbd></div>
                        </div>
                     <form>
                        <div class="form-group">
                           <label for="search-text">Search</label>
                           <input id="search-text" type="search" class="form-control" required="">
                        </div>
                        <button type="submit" class="btn btn-primary mr-2">Submit</button>
                        <button type="submit" class="btn bg-danger">Cancel</button>
                     </form>
                  </div>
               </div>
               <div class="card">
                  <div class="card-header d-flex justify-content-between">
                     <div class="header-title">
                        <h4 class="card-title">Input</h4>
                     </div>
                  <div class="header-action">
                           <i  type="button" data-toggle="collapse" data-target="#form-element-6" aria-expanded="false" aria-controls="alert-1">
                              <svg width="20" height="20" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                 <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4" />
                              </svg>
                           </i>
                        </div>
                  </div>
                  <div class="card-body">
                     <div class="collapse" id="form-element-6">
                           <div class="card"><kbd class="bg-dark"><pre id="form-input" class="text-white"><code>
&#x3C;form&#x3E;
   &#x3C;div class=&#x22;form-group&#x22;&#x3E;
      &#x3C;label for=&#x22;exampleInputText1&#x22;&#x3E;Input Text &#x3C;/label&#x3E;
      &#x3C;input type=&#x22;text&#x22; class=&#x22;form-control&#x22; id=&#x22;exampleInputText1&#x22; value=&#x22;Mark Tech&#x22;
         placeholder=&#x22;Enter Name&#x22;&#x3E;
   &#x3C;/div&#x3E;
   &#x3C;div class=&#x22;form-group&#x22;&#x3E;
      &#x3C;label for=&#x22;exampleInputEmail2&#x22;&#x3E;Email Input&#x3C;/label&#x3E;
      &#x3C;input type=&#x22;email&#x22; class=&#x22;form-control&#x22; id=&#x22;exampleInputEmail2&#x22; value=&#x22;markTech@gmail.com&#x22;
         placeholder=&#x22;Enter Email&#x22;&#x3E;
   &#x3C;/div&#x3E;
   &#x3C;div class=&#x22;form-group&#x22;&#x3E;
      &#x3C;label for=&#x22;exampleInputNumber3&#x22;&#x3E;Number Input&#x3C;/label&#x3E;
      &#x3C;input type=&#x22;number&#x22; class=&#x22;form-control&#x22; id=&#x22;exampleInputNumber3&#x22; value=&#x22;123456&#x22;&#x3E;
   &#x3C;/div&#x3E;
   &#x3C;div class=&#x22;form-group&#x22;&#x3E;
      &#x3C;label for=&#x22;exampleInputPassword4&#x22;&#x3E;Password Input&#x3C;/label&#x3E;
      &#x3C;input type=&#x22;password&#x22; class=&#x22;form-control&#x22; id=&#x22;exampleInputPassword4&#x22; value=&#x22;example123&#x22;
         placeholder=&#x22;Enter Password&#x22;&#x3E;
   &#x3C;/div&#x3E;
   &#x3C;button type=&#x22;submit&#x22; class=&#x22;btn btn-primary&#x22;&#x3E;Submit&#x3C;/button&#x3E;
   &#x3C;button type=&#x22;submit&#x22; class=&#x22;btn bg-danger&#x22;&#x3E;Cancel&#x3C;/button&#x3E;
&#x3C;/form&#x3E;
</code></pre></kbd></div>
                        </div>
                     <form>
                        <div class="form-group">
                           <label for="exampleInputText1">Input Text </label>
                           <input type="text" class="form-control" id="exampleInputText1" value="Mark Tech"
                              placeholder="Enter Name">
                        </div>
                        <div class="form-group">
                           <label for="exampleInputEmail2">Email Input</label>
                           <input type="email" class="form-control" id="exampleInputEmail2" value="markTech@gmail.com"
                              placeholder="Enter Email">
                        </div>
                        <div class="form-group">
                           <label for="exampleInputNumber3">Number Input</label>
                           <input type="number" class="form-control" id="exampleInputNumber3" value="123456">
                        </div>
                        <div class="form-group">
                           <label for="exampleInputPassword4">Password Input</label>
                           <input type="password" class="form-control" id="exampleInputPassword4" value="example123"
                              placeholder="Enter Password">
                        </div>
                        <button type="submit" class="btn btn-primary mr-2">Submit</button>
                        <button type="submit" class="btn bg-danger">Cancel</button>
                     </form>
                  </div>
               </div>
               <div class="card">
                  <div class="card-header d-flex justify-content-between">
                     <div class="header-title">
                        <h4 class="card-title">Input Size</h4>
                     </div>
                  <div class="header-action">
                           <i  type="button" data-toggle="collapse" data-target="#form-element-7" aria-expanded="false" aria-controls="alert-1">
                              <svg width="20" height="20" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                 <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4" />
                              </svg>
                           </i>
                        </div>
                  </div>
                  <div class="card-body">
                     <div class="collapse" id="form-element-7">
                           <div class="card"><kbd class="bg-dark"><pre id="input-size" class="text-white"><code>
&#x3C;form&#x3E;
   &#x3C;div class=&#x22;form-group&#x22;&#x3E;
      &#x3C;label for=&#x22;colFormLabelSm&#x22;&#x3E;Small&#x3C;/label&#x3E;
      &#x3C;input type=&#x22;email&#x22; class=&#x22;form-control form-control-sm&#x22; id=&#x22;colFormLabelSm&#x22;
         placeholder=&#x22;form-control-sm&#x22;&#x3E;
   &#x3C;/div&#x3E;
   &#x3C;div class=&#x22;form-group&#x22;&#x3E;
      &#x3C;label for=&#x22;colFormLabel&#x22;&#x3E;Default&#x3C;/label&#x3E;
      &#x3C;input type=&#x22;email&#x22; class=&#x22;form-control&#x22; id=&#x22;colFormLabel&#x22; placeholder=&#x22;form-control&#x22;&#x3E;
   &#x3C;/div&#x3E;
   &#x3C;div class=&#x22;form-group mb-0&#x22;&#x3E;
      &#x3C;label for=&#x22;colFormLabelLg&#x22; class=&#x22;pb-0&#x22;&#x3E;Large&#x3C;/label&#x3E;
      &#x3C;input type=&#x22;email&#x22; class=&#x22;form-control form-control-lg&#x22; id=&#x22;colFormLabelLg&#x22;
         placeholder=&#x22;form-control-lg&#x22;&#x3E;
   &#x3C;/div&#x3E;
&#x3C;/form&#x3E;
</code></pre></kbd></div>
                        </div>
                     <form>
                        <div class="form-group">
                           <label for="colFormLabelSm">Small</label>
                           <input type="email" class="form-control form-control-sm" id="colFormLabelSm"
                              placeholder="form-control-sm">
                        </div>
                        <div class="form-group">
                           <label for="colFormLabel">Default</label>
                           <input type="email" class="form-control" id="colFormLabel" placeholder="form-control">
                        </div>
                        <div class="form-group mb-0">
                           <label for="colFormLabelLg" class="pb-0">Large</label>
                           <input type="email" class="form-control form-control-lg" id="colFormLabelLg"
                              placeholder="form-control-lg">
                        </div>
                     </form>
                  </div>
               </div>
            </div>
            <div class="col-sm-6 col-lg-6">
               <div class="card">
                  <div class="card-header d-flex justify-content-between">
                     <div class="header-title">
                        <h4 class="card-title">Horizontal Form</h4>
                     </div>
                  <div class="header-action">
                           <i  type="button" data-toggle="collapse" data-target="#form-element-8" aria-expanded="false" aria-controls="alert-1">
                              <svg width="20" height="20" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                 <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4" />
                              </svg>
                           </i>
                        </div>
                  </div>
                  <div class="card-body">
                     <div class="collapse" id="form-element-8">
                           <div class="card"><kbd class="bg-dark"><pre id="horizontal-form" class="text-white"><code>
&#x3C;form class=&#x22;form-horizontal&#x22; action=&#x22;/action_page.php&#x22;&#x3E;
   &#x3C;div class=&#x22;form-group row&#x22;&#x3E;
      &#x3C;label class=&#x22;control-label col-sm-3 align-self-center&#x22; for=&#x22;email&#x22;&#x3E;Email:&#x3C;/label&#x3E;
      &#x3C;div class=&#x22;col-sm-9&#x22;&#x3E;
         &#x3C;input type=&#x22;email&#x22; class=&#x22;form-control&#x22; id=&#x22;email&#x22; placeholder=&#x22;Enter Your  email&#x22;&#x3E;
      &#x3C;/div&#x3E;
   &#x3C;/div&#x3E;
   &#x3C;div class=&#x22;form-group row&#x22;&#x3E;
      &#x3C;label class=&#x22;control-label col-sm-3 align-self-center&#x22; for=&#x22;pwd1&#x22;&#x3E;Password:&#x3C;/label&#x3E;
      &#x3C;div class=&#x22;col-sm-9&#x22;&#x3E;
         &#x3C;input type=&#x22;password&#x22; class=&#x22;form-control&#x22; id=&#x22;pwd1&#x22; placeholder=&#x22;Enter Your password&#x22;&#x3E;
      &#x3C;/div&#x3E;
   &#x3C;/div&#x3E;
   &#x3C;div class=&#x22;form-group&#x22;&#x3E;
      &#x3C;div class=&#x22;checkbox&#x22;&#x3E;
         &#x3C;label&#x3E;&#x3C;input type=&#x22;checkbox&#x22;&#x3E; Remember me&#x3C;/label&#x3E;
      &#x3C;/div&#x3E;
   &#x3C;/div&#x3E;
   &#x3C;div class=&#x22;form-group&#x22;&#x3E;
      &#x3C;button type=&#x22;submit&#x22; class=&#x22;btn btn-primary&#x22;&#x3E;Submit&#x3C;/button&#x3E;
      &#x3C;button type=&#x22;submit&#x22; class=&#x22;btn bg-danger&#x22;&#x3E;Cancel&#x3C;/button&#x3E;
   &#x3C;/div&#x3E;
&#x3C;/form&#x3E;
</code></pre></kbd></div>
                        </div>
                     <form class="form-horizontal" action="/action_page.php">
                        <div class="form-group row">
                           <label class="control-label col-sm-3 align-self-center" for="email">Email:</label>
                           <div class="col-sm-9">
                              <input type="email" class="form-control" id="email" placeholder="Enter Your  email">
                           </div>
                        </div>
                        <div class="form-group row">
                           <label class="control-label col-sm-3 align-self-center" for="pwd1">Password:</label>
                           <div class="col-sm-9">
                              <input type="password" class="form-control" id="pwd1" placeholder="Enter Your password">
                           </div>
                        </div>
                        <div class="form-group">
                           <div class="checkbox">
                              <label><input type="checkbox"> Remember me</label>
                           </div>
                        </div>
                        <div class="form-group mb-0">
                           <button type="submit" class="btn btn-primary mr-2">Submit</button>
                           <button type="submit" class="btn bg-danger">Cancel</button>
                        </div>
                     </form>
                  </div>
               </div>
               <div class="card">
                  <div class="card-header d-flex justify-content-between">
                     <div class="header-title">
                        <h4 class="card-title">Form row</h4>
                     </div>
                  <div class="header-action">
                           <i  type="button" data-toggle="collapse" data-target="#form-element-9" aria-expanded="false" aria-controls="alert-1">
                              <svg width="20" height="20" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                 <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4" />
                              </svg>
                           </i>
                        </div>
                  </div>
                  <div class="card-body">
                     <div class="collapse" id="form-element-9">
                           <div class="card"><kbd class="bg-dark"><pre id="form-now" class="text-white"><code>
&#x3C;form&#x3E;
   &#x3C;div class=&#x22;form-row&#x22;&#x3E;
      &#x3C;div class=&#x22;col&#x22;&#x3E;
         &#x3C;input type=&#x22;text&#x22; class=&#x22;form-control&#x22; placeholder=&#x22;First name&#x22;&#x3E;
      &#x3C;/div&#x3E;
      &#x3C;div class=&#x22;col&#x22;&#x3E;
         &#x3C;input type=&#x22;text&#x22; class=&#x22;form-control&#x22; placeholder=&#x22;Last name&#x22;&#x3E;
      &#x3C;/div&#x3E;
   &#x3C;/div&#x3E;
&#x3C;/form&#x3E;
</code></pre></kbd></div>
                        </div>
                     <form>
                        <div class="form-row">
                           <div class="col">
                              <input type="text" class="form-control" placeholder="First name">
                           </div>
                           <div class="col">
                              <input type="text" class="form-control" placeholder="Last name">
                           </div>
                        </div>
                     </form>
                  </div>
               </div>
               <div class="card">
                  <div class="card-header d-flex justify-content-between">
                     <div class="header-title">
                        <h4 class="card-title">Input Url</h4>
                     </div>
                  <div class="header-action">
                           <i  type="button" data-toggle="collapse" data-target="#form-element-10" aria-expanded="false" aria-controls="alert-1">
                              <svg width="20" height="20" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                 <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4" />
                              </svg>
                           </i>
                        </div>
                  </div>
                  <div class="card-body">
                     <div class="collapse" id="form-element-10">
                           <div class="card"><kbd class="bg-dark"><pre id="input-url" class="text-white"><code>
&#x3C;form&#x3E;
   &#x3C;div class=&#x22;form-group&#x22;&#x3E;
      &#x3C;label for=&#x22;exampleInputurl&#x22;&#x3E;Url Input&#x3C;/label&#x3E;
      &#x3C;input type=&#x22;url&#x22; class=&#x22;form-control&#x22; id=&#x22;exampleInputurl&#x22; value=&#x22;https://getbootstrap.com&#x22;
         placeholder=&#x22;Enter Url&#x22;&#x3E;
   &#x3C;/div&#x3E;
   &#x3C;button type=&#x22;submit&#x22; class=&#x22;btn btn-primary&#x22;&#x3E;Submit&#x3C;/button&#x3E;
   &#x3C;button type=&#x22;submit&#x22; class=&#x22;btn bg-danger&#x22;&#x3E;Cancel&#x3C;/button&#x3E;
&#x3C;/form&#x3E;
</code></pre></kbd></div>
                        </div>
                     <form>
                        <div class="form-group">
                           <label for="exampleInputurl">Url Input</label>
                           <input type="url" class="form-control" id="exampleInputurl" value="https://getbootstrap.com"
                              placeholder="Enter Url">
                        </div>
                        <button type="submit" class="btn btn-primary mr-2">Submit</button>
                        <button type="submit" class="btn bg-danger">Cancel</button>
                     </form>
                  </div>
               </div>
               <div class="card">
                  <div class="card-header d-flex justify-content-between">
                     <div class="header-title">
                        <h4 class="card-title">Input Range</h4>
                     </div>
                  <div class="header-action">
                           <i  type="button" data-toggle="collapse" data-target="#form-element-11" aria-expanded="false" aria-controls="alert-1">
                              <svg width="20" height="20" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                 <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4" />
                              </svg>
                           </i>
                        </div>
                  </div>
                  <div class="card-body">
                     <div class="collapse" id="form-element-11">
                           <div class="card"><kbd class="bg-dark"><pre id="input-range" class="text-white"><code>
&#x3C;form&#x3E;
   &#x3C;div class=&#x22;form-group&#x22;&#x3E;
      &#x3C;label for=&#x22;formControlRange&#x22;&#x3E;Range input&#x3C;/label&#x3E;
      &#x3C;input type=&#x22;range&#x22; class=&#x22;form-control-range&#x22; id=&#x22;formControlRange&#x22;&#x3E;
   &#x3C;/div&#x3E;
   &#x3C;button type=&#x22;submit&#x22; class=&#x22;btn btn-primary&#x22;&#x3E;Submit&#x3C;/button&#x3E;
   &#x3C;button type=&#x22;submit&#x22; class=&#x22;btn bg-danger&#x22;&#x3E;Cancel&#x3C;/button&#x3E;
&#x3C;/form&#x3E;
</code></pre></kbd></div>
                        </div>
                     <form>
                        <div class="form-group">
                           <label for="formControlRange">Range input</label>
                           <input type="range" class="form-control-range" id="formControlRange">
                        </div>
                        <button type="submit" class="btn btn-primary mr-2">Submit</button>
                        <button type="submit" class="btn bg-danger">Cancel</button>
                     </form>
                  </div>
               </div>
               <div class="card">
                  <div class="card-header d-flex justify-content-between">
                     <div class="header-title">
                        <h4 class="card-title">Input Custom Range</h4>
                     </div>
                  <div class="header-action">
                           <i  type="button" data-toggle="collapse" data-target="#form-element-12" aria-expanded="false" aria-controls="alert-1">
                              <svg width="20" height="20" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                 <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4" />
                              </svg>
                           </i>
                        </div>
                  </div>
                  <div class="card-body">
                     <div class="collapse" id="form-element-12">
                           <div class="card"><kbd class="bg-dark"><pre id="input-custom-range" class="text-white"><code>
&#x3C;form&#x3E;
   &#x3C;div class=&#x22;form-group&#x22;&#x3E;
      &#x3C;label for=&#x22;customRange1&#x22;&#x3E;Range Input&#x3C;/label&#x3E;
      &#x3C;input type=&#x22;range&#x22; class=&#x22;custom-range&#x22; id=&#x22;customRange1&#x22;&#x3E;
   &#x3C;/div&#x3E;
   &#x3C;button type=&#x22;submit&#x22; class=&#x22;btn btn-primary&#x22;&#x3E;Submit&#x3C;/button&#x3E;
   &#x3C;button type=&#x22;submit&#x22; class=&#x22;btn bg-danger&#x22;&#x3E;Cancel&#x3C;/button&#x3E;
&#x3C;/form&#x3E;
</code></pre></kbd></div>
                        </div>
                     <form>
                        <div class="form-group">
                           <label for="customRange1">Range Input</label>
                           <input type="range" class="custom-range" id="customRange1">
                        </div>
                        <button type="submit" class="btn btn-primary mr-2">Submit</button>
                        <button type="submit" class="btn bg-danger">Cancel</button>
                     </form>
                  </div>
               </div>
               <div class="card">
                  <div class="card-header d-flex justify-content-between">
                     <div class="header-title">
                        <h4 class="card-title">Input Choose file</h4>
                     </div>
                  <div class="header-action">
                           <i  type="button" data-toggle="collapse" data-target="#form-element-13" aria-expanded="false" aria-controls="alert-1">
                              <svg width="20" height="20" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                 <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4" />
                              </svg>
                           </i>
                        </div>
                  </div>
                  <div class="card-body">
                     <div class="collapse" id="form-element-13">
                           <div class="card"><kbd class="bg-dark"><pre id="input-choose-file" class="text-white"><code>
&#x3C;form&#x3E;
   &#x3C;div class=&#x22;form-group&#x22;&#x3E;
      &#x3C;div class=&#x22;custom-file&#x22;&#x3E;
         &#x3C;input type=&#x22;file&#x22; class=&#x22;custom-file-input&#x22; id=&#x22;customFile&#x22;&#x3E;
         &#x3C;label class=&#x22;custom-file-label&#x22; for=&#x22;customFile&#x22;&#x3E;Choose file&#x3C;/label&#x3E;
      &#x3C;/div&#x3E;
   &#x3C;/div&#x3E;
   &#x3C;button type=&#x22;submit&#x22; class=&#x22;btn btn-primary&#x22;&#x3E;Submit&#x3C;/button&#x3E;
   &#x3C;button type=&#x22;submit&#x22; class=&#x22;btn bg-danger&#x22;&#x3E;Cancel&#x3C;/button&#x3E;
&#x3C;/form&#x3E;
</code></pre></kbd></div>
                        </div>
                     <form>
                        <div class="form-group">
                           <div class="custom-file">
                              <input type="file" class="custom-file-input" id="customFile">
                              <label class="custom-file-label" for="customFile">Choose file</label>
                           </div>
                        </div>
                        <button type="submit" class="btn btn-primary mr-2">Submit</button>
                        <button type="submit" class="btn bg-danger">Cancel</button>
                     </form>
                  </div>
               </div>
               <div class="card">
                  <div class="card-header d-flex justify-content-between">
                     <div class="header-title">
                        <h4 class="card-title">Input</h4>
                     </div>
                  <div class="header-action">
                           <i  type="button" data-toggle="collapse" data-target="#form-element-14" aria-expanded="false" aria-controls="alert-1">
                              <svg width="20" height="20" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                 <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4" />
                              </svg>
                           </i>
                        </div>
                  </div>
                  <div class="card-body">
                     <div class="collapse" id="form-element-14">
                           <div class="card"><kbd class="bg-dark"><pre id="form-input2" class="text-white"><code>
&#x3C;form&#x3E;
   &#x3C;div class=&#x22;form-group&#x22;&#x3E;
      &#x3C;label for=&#x22;exampleInputDisabled5&#x22;&#x3E;Disabled Input&#x3C;/label&#x3E;
      &#x3C;input type=&#x22;text&#x22; class=&#x22;form-control&#x22; id=&#x22;exampleInputDisabled5&#x22; disabled=&#x22;&#x22; value=&#x22;Mark Tech&#x22;&#x3E;
   &#x3C;/div&#x3E;
   &#x3C;div class=&#x22;form-group&#x22;&#x3E;
      &#x3C;label for=&#x22;exampleInputPlaceholder&#x22;&#x3E;Placeholder&#x3C;/label&#x3E;
      &#x3C;input type=&#x22;text&#x22; class=&#x22;form-control&#x22; id=&#x22;exampleInputPlaceholder&#x22;
         placeholder=&#x22;This is Placeholder&#x22;&#x3E;
   &#x3C;/div&#x3E;
   &#x3C;div class=&#x22;form-group&#x22;&#x3E;
      &#x3C;label for=&#x22;exampleInputReadonly&#x22;&#x3E;Readonly&#x3C;/label&#x3E;
      &#x3C;input type=&#x22;text&#x22; class=&#x22;form-control&#x22; id=&#x22;exampleInputReadonly&#x22; readonly=&#x22;&#x22; value=&#x22;Mark Tech&#x22;&#x3E;
   &#x3C;/div&#x3E;
   &#x3C;div class=&#x22;form-group&#x22;&#x3E;
      &#x3C;label for=&#x22;exampleInputcolor&#x22;&#x3E;Input Color &#x3C;/label&#x3E;
      &#x3C;input type=&#x22;color&#x22; class=&#x22;form-control&#x22; id=&#x22;exampleInputcolor&#x22; value=&#x22;#4788ff&#x22;&#x3E;
   &#x3C;/div&#x3E;
   &#x3C;button type=&#x22;submit&#x22; class=&#x22;btn btn-primary&#x22;&#x3E;Submit&#x3C;/button&#x3E;
   &#x3C;button type=&#x22;submit&#x22; class=&#x22;btn bg-danger&#x22;&#x3E;Cancel&#x3C;/button&#x3E;
&#x3C;/form&#x3E;
</code></pre></kbd></div>
                        </div>
                     <form>
                        <div class="form-group">
                           <label for="exampleInputDisabled5">Disabled Input</label>
                           <input type="text" class="form-control" id="exampleInputDisabled5" disabled="" value="Mark Tech">
                        </div>
                        <div class="form-group">
                           <label for="exampleInputPlaceholder">Placeholder</label>
                           <input type="text" class="form-control" id="exampleInputPlaceholder"
                              placeholder="This is Placeholder">
                        </div>
                        <div class="form-group">
                           <label for="exampleInputReadonly">Readonly</label>
                           <input type="text" class="form-control" id="exampleInputReadonly" readonly="" value="Mark Tech">
                        </div>
                        <div class="form-group">
                           <label for="exampleInputcolor">Input Color </label>
                           <input type="color" class="form-control" id="exampleInputcolor" value="#4788ff">
                        </div>
                        <button type="submit" class="btn btn-primary mr-2">Submit</button>
                        <button type="submit" class="btn bg-danger">Cancel</button>
                     </form>
                  </div>
               </div>
               <div class="card">
                  <div class="card-header d-flex justify-content-between">
                     <div class="header-title">
                        <h4 class="card-title">Select Size</h4>
                     </div>
                  <div class="header-action">
                           <i  type="button" data-toggle="collapse" data-target="#form-element-15" aria-expanded="false" aria-controls="alert-1">
                              <svg width="20" height="20" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                 <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4" />
                              </svg>
                           </i>
                        </div>
                  </div>
                  <div class="card-body">
                     <div class="collapse" id="form-element-15">
                           <div class="card"><kbd class="bg-dark"><pre id="select-size" class="text-white"><code>
&#x3C;div class=&#x22;form-group&#x22;&#x3E;
   &#x3C;label&#x3E;Small&#x3C;/label&#x3E;
   &#x3C;select class=&#x22;form-control form-control-sm mb-3&#x22;&#x3E;
      &#x3C;option selected=&#x22;&#x22;&#x3E;Open this select menu&#x3C;/option&#x3E;
      &#x3C;option value=&#x22;1&#x22;&#x3E;One&#x3C;/option&#x3E;
      &#x3C;option value=&#x22;2&#x22;&#x3E;Two&#x3C;/option&#x3E;
      &#x3C;option value=&#x22;3&#x22;&#x3E;Three&#x3C;/option&#x3E;
   &#x3C;/select&#x3E;
&#x3C;/div&#x3E;
&#x3C;div class=&#x22;form-group&#x22;&#x3E;
   &#x3C;label&#x3E;Default&#x3C;/label&#x3E;
   &#x3C;select class=&#x22;form-control mb-3&#x22;&#x3E;
      &#x3C;option selected=&#x22;&#x22;&#x3E;Open this select menu&#x3C;/option&#x3E;
      &#x3C;option value=&#x22;1&#x22;&#x3E;One&#x3C;/option&#x3E;
      &#x3C;option value=&#x22;2&#x22;&#x3E;Two&#x3C;/option&#x3E;
      &#x3C;option value=&#x22;3&#x22;&#x3E;Three&#x3C;/option&#x3E;
   &#x3C;/select&#x3E;
&#x3C;/div&#x3E;
&#x3C;div class=&#x22;form-group&#x22;&#x3E;
   &#x3C;label&#x3E;Large&#x3C;/label&#x3E;
   &#x3C;select class=&#x22;form-control form-control-lg&#x22;&#x3E;
      &#x3C;option selected=&#x22;&#x22;&#x3E;Open this select menu&#x3C;/option&#x3E;
      &#x3C;option value=&#x22;1&#x22;&#x3E;One&#x3C;/option&#x3E;
      &#x3C;option value=&#x22;2&#x22;&#x3E;Two&#x3C;/option&#x3E;
      &#x3C;option value=&#x22;3&#x22;&#x3E;Three&#x3C;/option&#x3E;
   &#x3C;/select&#x3E;
&#x3C;/div&#x3E;
</code></pre></kbd></div>
                        </div>
                     <div class="form-group">
                        <label>Small</label>
                        <select class="form-control form-control-sm mb-3">
                           <option selected="">Open this select menu</option>
                           <option value="1">One</option>
                           <option value="2">Two</option>
                           <option value="3">Three</option>
                        </select>
                     </div>
                     <div class="form-group">
                        <label>Default</label>
                        <select class="form-control mb-3">
                           <option selected="">Open this select menu</option>
                           <option value="1">One</option>
                           <option value="2">Two</option>
                           <option value="3">Three</option>
                        </select>
                     </div>
                     <div class="form-group">
                        <label>Large</label>
                        <select class="form-control form-control-lg">
                           <option selected="">Open this select menu</option>
                           <option value="1">One</option>
                           <option value="2">Two</option>
                           <option value="3">Three</option>
                        </select>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
</x-app-layout>
