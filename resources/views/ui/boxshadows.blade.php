<x-app-layout>
<div class="container">
         <div class="row">
            <div class="col-lg-12">
               <div class="card card-block card-stretch card-height">
                  <div class="card-body">
                     <h4 class="mb-3">Box Shadow</h4>
                     <p class="mb-0">A box shadow is an enclosed glass-front display case containing an object or objects presented in a thematic grouping with artistic or personal significance. The grouping of the objects and the depth effect created by their relative heights from the backing creates a dramatic visual result.</p>
                  </div>
               </div>
            </div>
            <div class="col-lg-12">
               <div class="card card-block card-stretch card-height">
                  <div class="card-header d-flex justify-content-between">
                     <div class="header-title">
                        <h4 class="card-title">Shadows</h4>
                     </div>
                   <div class="header-action">
                           <i  type="button" data-toggle="collapse" data-target="#boxshadow-1" aria-expanded="false" aria-controls="alert-1">
                              <svg width="20" height="20" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                 <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4" />
                              </svg>
                           </i>
                        </div>
                  </div>
                  <div class="card-body">
                     <div class="collapse" id="boxshadow-1">
                           <div class="card"><kbd class="bg-dark"><pre id="shadows" class="text-white"><code>
&#x3C;div class=&#x22;row&#x22;&#x3E;
   &#x3C;div class=&#x22;col-sm-6 col-md-6 col-lg-3&#x22;&#x3E;
      &#x3C;div class=&#x22;shadow-lg p-4 shadow-showcase text-center&#x22;&#x3E;
         &#x3C;h6&#x3E;Larger shadow&#x3C;/h6&#x3E;
      &#x3C;/div&#x3E;
   &#x3C;/div&#x3E;
   &#x3C;div class=&#x22;col-sm-6 col-md-6 col-lg-3 mt-3 mt-md-0&#x22;&#x3E;
      &#x3C;div class=&#x22;shadow p-4 shadow-showcase text-center&#x22;&#x3E;
         &#x3C;h6&#x3E;Regular shadow&#x3C;/h6&#x3E;
      &#x3C;/div&#x3E;
   &#x3C;/div&#x3E;
   &#x3C;div class=&#x22;col-sm-6 col-md-6 col-lg-3 mt-3 mt-lg-0&#x22;&#x3E;
      &#x3C;div class=&#x22;shadow-sm p-4 shadow-showcase text-center&#x22;&#x3E;
         &#x3C;h6&#x3E;Small shadow&#x3C;/h6&#x3E;
      &#x3C;/div&#x3E;
   &#x3C;/div&#x3E;
   &#x3C;div class=&#x22;col-sm-6 col-md-6 col-lg-3 mt-3 mt-lg-0&#x22;&#x3E;
      &#x3C;div class=&#x22;shadow-none p-4 shadow-showcase text-center&#x22;&#x3E;
         &#x3C;h6&#x3E;No shadow&#x3C;/h6&#x3E;
      &#x3C;/div&#x3E;
   &#x3C;/div&#x3E;
&#x3C;/div&#x3E;
</code></pre></kbd></div>
                        </div>
                     <div class="row">
                        <div class="col-sm-6 col-md-6 col-lg-3">
                           <div class="shadow-lg p-4 shadow-showcase text-center">
                              <h6>Larger shadow</h6>
                           </div>
                        </div>
                        <div class="col-sm-6 col-md-6 col-lg-3 mt-3 mt-md-0">
                           <div class="shadow p-4 shadow-showcase text-center">
                              <h6>Regular shadow</h6>
                           </div>
                        </div>
                        <div class="col-sm-6 col-md-6 col-lg-3 mt-3 mt-lg-0">
                           <div class="shadow-sm p-4 shadow-showcase text-center">
                              <h6>Small shadow</h6>
                           </div>
                        </div>
                        <div class="col-sm-6 col-md-6 col-lg-3 mt-3 mt-lg-0">
                           <div class="shadow-none p-4 shadow-showcase text-center">
                              <h6>No shadow</h6>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="col-lg-12">
               <div class="card card-block card-stretch card-height">
                  <div class="card-header d-flex justify-content-between">
                     <div class="header-title">
                        <h4 class="card-title">Basic Shadow</h4>
                     </div>
                  <div class="header-action">
                           <i  type="button" data-toggle="collapse" data-target="#boxshadow-2" aria-expanded="false" aria-controls="alert-1">
                              <svg width="20" height="20" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                 <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4" />
                              </svg>
                           </i>
                        </div>
                  </div>
                  <div class="card-body">
                     <div class="collapse" id="boxshadow-2">
                           <div class="card"><kbd class="bg-dark"><pre id="basic-boxshadow" class="text-white"><code>
&#x3C;div class=&#x22;row&#x22;&#x3E;
   &#x3C;div class=&#x22;col-sm-6 col-md-6 col-lg-3&#x22;&#x3E;
      &#x3C;div class=&#x22;bottom-left p-4 shadow-showcase text-center&#x22;&#x3E;
         &#x3C;h6&#x3E;Bottom left&#x3C;/h6&#x3E;
      &#x3C;/div&#x3E;
   &#x3C;/div&#x3E;
   &#x3C;div class=&#x22;col-sm-6 col-md-6 col-lg-3 mt-3 mt-md-0&#x22;&#x3E;
      &#x3C;div class=&#x22;top-left p-4 shadow-showcase text-center&#x22;&#x3E;
         &#x3C;h6&#x3E;Top Left&#x3C;/h6&#x3E;
      &#x3C;/div&#x3E;
   &#x3C;/div&#x3E;
   &#x3C;div class=&#x22;col-sm-6 col-md-6 col-lg-3 mt-3 mt-lg-0&#x22;&#x3E;
      &#x3C;div class=&#x22;bottom-right p-4 shadow-showcase text-center&#x22;&#x3E;
         &#x3C;h6&#x3E;Bottom right&#x3C;/h6&#x3E;
      &#x3C;/div&#x3E;
   &#x3C;/div&#x3E;
   &#x3C;div class=&#x22;col-sm-6 col-md-6 col-lg-3 mt-3 mt-lg-0&#x22;&#x3E;
      &#x3C;div class=&#x22;top-right p-4 shadow-showcase text-center&#x22;&#x3E;
         &#x3C;h6&#x3E;Top right&#x3C;/h6&#x3E;
      &#x3C;/div&#x3E;
   &#x3C;/div&#x3E;
&#x3C;/div&#x3E;
</code></pre></kbd></div>
                        </div>
                     <div class="row">
                        <div class="col-sm-6 col-md-6 col-lg-3">
                           <div class="bottom-left p-4 shadow-showcase text-center">
                              <h6>Bottom left</h6>
                           </div>
                        </div>
                        <div class="col-sm-6 col-md-6 col-lg-3 mt-3 mt-md-0">
                           <div class="top-left p-4 shadow-showcase text-center">
                              <h6>Top Left</h6>
                           </div>
                        </div>
                        <div class="col-sm-6 col-md-6 col-lg-3 mt-3 mt-lg-0">
                           <div class="bottom-right p-4 shadow-showcase text-center">
                              <h6>Bottom right</h6>
                           </div>
                        </div>
                        <div class="col-sm-6 col-md-6 col-lg-3 mt-3 mt-lg-0">
                           <div class="top-right p-4 shadow-showcase text-center">
                              <h6>Top right</h6>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="col-lg-12">
               <div class="card card-block card-stretch card-height">
                  <div class="card-header d-flex justify-content-between">
                     <div class="header-title">
                        <h4 class="card-title">Drop Shadow</h4>
                     </div>
                   <div class="header-action">
                           <i  type="button" data-toggle="collapse" data-target="#boxshadow-3" aria-expanded="false" aria-controls="alert-1">
                              <svg width="20" height="20" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                 <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4" />
                              </svg>
                           </i>
                        </div>
                  </div>
                  <div class="card-body">
                     <div class="collapse" id="boxshadow-3">
                           <div class="card"><kbd class="bg-dark"><pre id="drop-boxshadow" class="text-white"><code>
&#x3C;div class=&#x22;row&#x22;&#x3E;
   &#x3C;div class=&#x22;col-sm-6 col-md-6 col-lg-3&#x22;&#x3E;
      &#x3C;div class=&#x22;shadow-bottom p-4 shadow-showcase text-center&#x22;&#x3E;
         &#x3C;h6&#x3E;Bottom shadow&#x3C;/h6&#x3E;
      &#x3C;/div&#x3E;
   &#x3C;/div&#x3E;
   &#x3C;div class=&#x22;col-sm-6 col-md-6 col-lg-3 mt-3 mt-md-0&#x22;&#x3E;
      &#x3C;div class=&#x22;basic-drop-shadow p-4 shadow-showcase text-center&#x22;&#x3E;
         &#x3C;h6&#x3E;Basic Shadow&#x3C;/h6&#x3E;
      &#x3C;/div&#x3E;
   &#x3C;/div&#x3E;
   &#x3C;div class=&#x22;col-sm-6 col-md-6 col-lg-3 mt-3 mt-lg-0&#x22;&#x3E;
      &#x3C;div class=&#x22;inner-shadow p-4 shadow-showcase text-center&#x22;&#x3E;
         &#x3C;h6&#x3E;inner Shadow&#x3C;/h6&#x3E;
      &#x3C;/div&#x3E;
   &#x3C;/div&#x3E;
   &#x3C;div class=&#x22;col-sm-6 col-md-6 col-lg-3 mt-3 mt-lg-0&#x22;&#x3E;
      &#x3C;div class=&#x22;blur-shadow p-4 shadow-showcase text-center&#x22;&#x3E;
         &#x3C;h6&#x3E;Blur Shadow&#x3C;/h6&#x3E;
      &#x3C;/div&#x3E;
   &#x3C;/div&#x3E;
&#x3C;/div&#x3E;
</code></pre></kbd></div>
                        </div>
                     <div class="row">
                        <div class="col-sm-6 col-md-6 col-lg-3">
                           <div class="shadow-bottom p-4 shadow-showcase text-center">
                              <h6>Bottom shadow</h6>
                           </div>
                        </div>
                        <div class="col-sm-6 col-md-6 col-lg-3 mt-3 mt-md-0">
                           <div class="basic-drop-shadow p-4 shadow-showcase text-center">
                              <h6>Basic Shadow</h6>
                           </div>
                        </div>
                        <div class="col-sm-6 col-md-6 col-lg-3 mt-3 mt-lg-0">
                           <div class="inner-shadow p-4 shadow-showcase text-center">
                              <h6>inner Shadow</h6>
                           </div>
                        </div>
                        <div class="col-sm-6 col-md-6 col-lg-3 mt-3 mt-lg-0">
                           <div class="blur-shadow p-4 shadow-showcase text-center">
                              <h6>Blur Shadow</h6>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
</x-app-layout>
