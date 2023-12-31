<x-app-layout>
<div class="container-fluid">
         <div class="row">
            <div class="col-lg-6">
               <div class="card card-block card-stretch card-height">
                  <div class="card-header d-flex justify-content-between">
                     <div class="header-title">
                        <h4 class="card-title">Avatar Sizing</h4>
                     </div>
                  <div class="header-action">
                           <i  type="button" data-toggle="collapse" data-target="#tabletree-1" aria-expanded="false" aria-controls="alert-1">
                              <svg width="20" height="20" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                 <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4" />
                              </svg>
                           </i>
                        </div>
                  </div>
                  <div class="card-body">
                     <div class="collapse" id="tabletree-1">
                           <div class="card"><kbd class="bg-dark"><pre id="avatar-sizing" class="text-white"><code>
&#x3C;table id=&#x22;tree-table-1&#x22; class=&#x22;table table-hover table-bordered mm-bg-white tree&#x22;&#x3E;
   &#x3C;thead class=&#x22;bg-white&#x22;&#x3E;
      &#x3C;tr&#x3E;
         &#x3C;th&#x3E;Demo 1&#x3C;/th&#x3E;
      &#x3C;/tr&#x3E;
   &#x3C;/thead&#x3E;
   &#x3C;tbody&#x3E;
      &#x3C;tr data-id=&#x22;1&#x22; data-parent=&#x22;0&#x22; data-level=&#x22;1&#x22;&#x3E;
         &#x3C;td data-column=&#x22;name&#x22;&#x3E;Data 1&#x3C;/td&#x3E;
      &#x3C;/tr&#x3E;
      &#x3C;tr data-id=&#x22;2&#x22; data-parent=&#x22;1&#x22; data-level=&#x22;2&#x22;&#x3E;
         &#x3C;td data-column=&#x22;name&#x22;&#x3E;Data 1.1&#x3C;/td&#x3E;
      &#x3C;/tr&#x3E;
      &#x3C;tr data-id=&#x22;3&#x22; data-parent=&#x22;2&#x22; data-level=&#x22;3&#x22;&#x3E;
         &#x3C;td data-column=&#x22;name&#x22;&#x3E;Data 1.2&#x3C;/td&#x3E;
      &#x3C;/tr&#x3E;
      &#x3C;tr data-id=&#x22;4&#x22; data-parent=&#x22;3&#x22; data-level=&#x22;4&#x22;&#x3E;
         &#x3C;td data-column=&#x22;name&#x22;&#x3E;Data 1.3&#x3C;/td&#x3E;
      &#x3C;/tr&#x3E;
      &#x3C;tr data-id=&#x22;6&#x22; data-parent=&#x22;0&#x22; data-level=&#x22;1&#x22;&#x3E;
         &#x3C;td data-column=&#x22;name&#x22;&#x3E;Data 2&#x3C;/td&#x3E;
      &#x3C;/tr&#x3E;
      &#x3C;tr data-id=&#x22;7&#x22; data-parent=&#x22;6&#x22; data-level=&#x22;2&#x22;&#x3E;
         &#x3C;td data-column=&#x22;name&#x22;&#x3E;Data 2.1&#x3C;/td&#x3E;
      &#x3C;/tr&#x3E;
      &#x3C;tr data-id=&#x22;8&#x22; data-parent=&#x22;7&#x22; data-level=&#x22;3&#x22;&#x3E;
         &#x3C;td data-column=&#x22;name&#x22;&#x3E;Data 2.2&#x3C;/td&#x3E;
      &#x3C;/tr&#x3E;
      &#x3C;tr data-id=&#x22;9&#x22; data-parent=&#x22;8&#x22; data-level=&#x22;4&#x22;&#x3E;
         &#x3C;td data-column=&#x22;name&#x22;&#x3E;Data 2.3&#x3C;/td&#x3E;
      &#x3C;/tr&#x3E;
      &#x3C;tr data-id=&#x22;10&#x22; data-parent=&#x22;0&#x22; data-level=&#x22;1&#x22;&#x3E;
         &#x3C;td data-column=&#x22;name&#x22;&#x3E;Data 3&#x3C;/td&#x3E;
      &#x3C;/tr&#x3E;
      &#x3C;tr data-id=&#x22;11&#x22; data-parent=&#x22;10&#x22; data-level=&#x22;2&#x22;&#x3E;
         &#x3C;td data-column=&#x22;name&#x22;&#x3E;Data 3.1&#x3C;/td&#x3E;
      &#x3C;/tr&#x3E;
      &#x3C;tr data-id=&#x22;12&#x22; data-parent=&#x22;11&#x22; data-level=&#x22;3&#x22;&#x3E;
         &#x3C;td data-column=&#x22;name&#x22;&#x3E;Data 3.2&#x3C;/td&#x3E;
      &#x3C;/tr&#x3E;
      &#x3C;tr data-id=&#x22;13&#x22; data-parent=&#x22;12&#x22; data-level=&#x22;4&#x22;&#x3E;
         &#x3C;td data-column=&#x22;name&#x22;&#x3E;Data 3.3&#x3C;/td&#x3E;
      &#x3C;/tr&#x3E;
      &#x3C;tr data-id=&#x22;14&#x22; data-parent=&#x22;0&#x22; data-level=&#x22;1&#x22;&#x3E;
         &#x3C;td data-column=&#x22;name&#x22;&#x3E;Data 4&#x3C;/td&#x3E;
      &#x3C;/tr&#x3E;
      &#x3C;tr data-id=&#x22;15&#x22; data-parent=&#x22;14&#x22; data-level=&#x22;2&#x22;&#x3E;
         &#x3C;td data-column=&#x22;name&#x22;&#x3E;Data 4.1&#x3C;/td&#x3E;
      &#x3C;/tr&#x3E;
      &#x3C;tr data-id=&#x22;16&#x22; data-parent=&#x22;15&#x22; data-level=&#x22;3&#x22;&#x3E;
         &#x3C;td data-column=&#x22;name&#x22;&#x3E;Data 4.2&#x3C;/td&#x3E;
      &#x3C;/tr&#x3E;
      &#x3C;tr data-id=&#x22;17&#x22; data-parent=&#x22;16&#x22; data-level=&#x22;4&#x22;&#x3E;
         &#x3C;td data-column=&#x22;name&#x22;&#x3E;Data 4.3&#x3C;/td&#x3E;
      &#x3C;/tr&#x3E;
   &#x3C;/tbody&#x3E;
&#x3C;/table&#x3E;
</code></pre></kbd></div>
                        </div>
                     <div class="table-responsive">
                        <table id="tree-table-1" class="table table-hover table-bordered mm-bg-white tree">
                           <thead class="bg-white">
                              <tr>
                                 <th>Demo 1</th>
                              </tr>
                           </thead>
                           <tbody>
                              <tr data-id="1" data-parent="0" data-level="1">
                                 <td data-column="name">Data 1</td>
                              </tr>
                              <tr data-id="2" data-parent="1" data-level="2">
                                 <td data-column="name">Data 1.1</td>
                              </tr>
                              <tr data-id="3" data-parent="2" data-level="3">
                                 <td data-column="name">Data 1.2</td>
                              </tr>
                              <tr data-id="4" data-parent="3" data-level="4">
                                 <td data-column="name">Data 1.3</td>
                              </tr>
                              <tr data-id="6" data-parent="0" data-level="1">
                                 <td data-column="name">Data 2</td>
                              </tr>
                              <tr data-id="7" data-parent="6" data-level="2">
                                 <td data-column="name">Data 2.1</td>
                              </tr>
                              <tr data-id="8" data-parent="7" data-level="3">
                                 <td data-column="name">Data 2.2</td>
                              </tr>
                              <tr data-id="9" data-parent="8" data-level="4">
                                 <td data-column="name">Data 2.3</td>
                              </tr>
                              <tr data-id="10" data-parent="0" data-level="1">
                                 <td data-column="name">Data 3</td>
                              </tr>
                              <tr data-id="11" data-parent="10" data-level="2">
                                 <td data-column="name">Data 3.1</td>
                              </tr>
                              <tr data-id="12" data-parent="11" data-level="3">
                                 <td data-column="name">Data 3.2</td>
                              </tr>
                              <tr data-id="13" data-parent="12" data-level="4">
                                 <td data-column="name">Data 3.3</td>
                              </tr>
                              <tr data-id="14" data-parent="0" data-level="1">
                                 <td data-column="name">Data 4</td>
                              </tr>
                              <tr data-id="15" data-parent="14" data-level="2">
                                 <td data-column="name">Data 4.1</td>
                              </tr>
                              <tr data-id="16" data-parent="15" data-level="3">
                                 <td data-column="name">Data 4.2</td>
                              </tr>
                              <tr data-id="17" data-parent="16" data-level="4">
                                 <td data-column="name">Data 4.3</td>
                              </tr>
                           </tbody>
                        </table>
                     </div>
                  </div>
               </div>
            </div>
            <div class="col-lg-6">
               <div class="card card-block card-stretch card-height">
                  <div class="card-header d-flex justify-content-between">
                     <div class="header-title">
                        <h4 class="card-title">Table Treeview</h4>
                     </div>
                  <div class="header-action">
                           <i  type="button" data-toggle="collapse" data-target="#tabletree-2" aria-expanded="false" aria-controls="alert-1">
                              <svg width="20" height="20" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                 <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4" />
                              </svg>
                           </i>
                        </div>
                  </div>
                  <div class="card-body">
                     <div class="collapse" id="tabletree-2">
                           <div class="card"><kbd class="bg-dark"><pre id="table-treeview" class="text-white"><code>
&#x3C;table id=&#x22;tree-table-2&#x22; class=&#x22;table table-hover table-bordered mm-bg-dark  tree&#x22;&#x3E;
   &#x3C;thead class=&#x22;bg-dark&#x22;&#x3E;
      &#x3C;tr&#x3E;
         &#x3C;th&#x3E;Demo 2&#x3C;/th&#x3E;
      &#x3C;/tr&#x3E;
   &#x3C;/thead&#x3E;
   &#x3C;tbody&#x3E;
      &#x3C;tr data-id=&#x22;1&#x22; data-parent=&#x22;0&#x22; data-level=&#x22;1&#x22;&#x3E;
         &#x3C;td data-column=&#x22;name&#x22;&#x3E;Data 1&#x3C;/td&#x3E;
      &#x3C;/tr&#x3E;
      &#x3C;tr data-id=&#x22;2&#x22; data-parent=&#x22;1&#x22; data-level=&#x22;2&#x22;&#x3E;
         &#x3C;td data-column=&#x22;name&#x22;&#x3E;Data 1.1&#x3C;/td&#x3E;
      &#x3C;/tr&#x3E;
      &#x3C;tr data-id=&#x22;3&#x22; data-parent=&#x22;2&#x22; data-level=&#x22;3&#x22;&#x3E;
         &#x3C;td data-column=&#x22;name&#x22;&#x3E;Data 1.2&#x3C;/td&#x3E;
      &#x3C;/tr&#x3E;
      &#x3C;tr data-id=&#x22;4&#x22; data-parent=&#x22;3&#x22; data-level=&#x22;4&#x22;&#x3E;
         &#x3C;td data-column=&#x22;name&#x22;&#x3E;Data 1.3&#x3C;/td&#x3E;
      &#x3C;/tr&#x3E;
      &#x3C;tr data-id=&#x22;6&#x22; data-parent=&#x22;0&#x22; data-level=&#x22;1&#x22;&#x3E;
         &#x3C;td data-column=&#x22;name&#x22;&#x3E;Data 2&#x3C;/td&#x3E;
      &#x3C;/tr&#x3E;
      &#x3C;tr data-id=&#x22;7&#x22; data-parent=&#x22;6&#x22; data-level=&#x22;2&#x22;&#x3E;
         &#x3C;td data-column=&#x22;name&#x22;&#x3E;Data 2.1&#x3C;/td&#x3E;
      &#x3C;/tr&#x3E;
      &#x3C;tr data-id=&#x22;8&#x22; data-parent=&#x22;7&#x22; data-level=&#x22;3&#x22;&#x3E;
         &#x3C;td data-column=&#x22;name&#x22;&#x3E;Data 2.2&#x3C;/td&#x3E;
      &#x3C;/tr&#x3E;
      &#x3C;tr data-id=&#x22;9&#x22; data-parent=&#x22;8&#x22; data-level=&#x22;4&#x22;&#x3E;
         &#x3C;td data-column=&#x22;name&#x22;&#x3E;Data 2.3&#x3C;/td&#x3E;
      &#x3C;/tr&#x3E;
      &#x3C;tr data-id=&#x22;10&#x22; data-parent=&#x22;0&#x22; data-level=&#x22;1&#x22;&#x3E;
         &#x3C;td data-column=&#x22;name&#x22;&#x3E;Data 3&#x3C;/td&#x3E;
      &#x3C;/tr&#x3E;
      &#x3C;tr data-id=&#x22;11&#x22; data-parent=&#x22;10&#x22; data-level=&#x22;2&#x22;&#x3E;
         &#x3C;td data-column=&#x22;name&#x22;&#x3E;Data 3.1&#x3C;/td&#x3E;
      &#x3C;/tr&#x3E;
      &#x3C;tr data-id=&#x22;12&#x22; data-parent=&#x22;11&#x22; data-level=&#x22;3&#x22;&#x3E;
         &#x3C;td data-column=&#x22;name&#x22;&#x3E;Data 3.2&#x3C;/td&#x3E;
      &#x3C;/tr&#x3E;
      &#x3C;tr data-id=&#x22;13&#x22; data-parent=&#x22;12&#x22; data-level=&#x22;4&#x22;&#x3E;
         &#x3C;td data-column=&#x22;name&#x22;&#x3E;Data 3.3&#x3C;/td&#x3E;
      &#x3C;/tr&#x3E;
      &#x3C;tr data-id=&#x22;14&#x22; data-parent=&#x22;0&#x22; data-level=&#x22;1&#x22;&#x3E;
         &#x3C;td data-column=&#x22;name&#x22;&#x3E;Data 4&#x3C;/td&#x3E;
      &#x3C;/tr&#x3E;
      &#x3C;tr data-id=&#x22;15&#x22; data-parent=&#x22;14&#x22; data-level=&#x22;2&#x22;&#x3E;
         &#x3C;td data-column=&#x22;name&#x22;&#x3E;Data 4.1&#x3C;/td&#x3E;
      &#x3C;/tr&#x3E;
      &#x3C;tr data-id=&#x22;16&#x22; data-parent=&#x22;15&#x22; data-level=&#x22;3&#x22;&#x3E;
         &#x3C;td data-column=&#x22;name&#x22;&#x3E;Data 4.2&#x3C;/td&#x3E;
      &#x3C;/tr&#x3E;
      &#x3C;tr data-id=&#x22;17&#x22; data-parent=&#x22;16&#x22; data-level=&#x22;4&#x22;&#x3E;
         &#x3C;td data-column=&#x22;name&#x22;&#x3E;Data 4.3&#x3C;/td&#x3E;
      &#x3C;/tr&#x3E;
   &#x3C;/tbody&#x3E;
&#x3C;/table&#x3E;
</code></pre></kbd></div>
                        </div>
                     <div class="table-responsive">
                        <table id="tree-table-2" class="table table-hover table-bordered mm-bg-dark  tree">
                           <thead class="bg-dark">
                              <tr>
                                 <th>Demo 2</th>
                              </tr>
                           </thead>
                           <tbody>
                              <tr data-id="1" data-parent="0" data-level="1">
                                 <td data-column="name">Data 1</td>
                              </tr>
                              <tr data-id="2" data-parent="1" data-level="2">
                                 <td data-column="name">Data 1.1</td>
                              </tr>
                              <tr data-id="3" data-parent="2" data-level="3">
                                 <td data-column="name">Data 1.2</td>
                              </tr>
                              <tr data-id="4" data-parent="3" data-level="4">
                                 <td data-column="name">Data 1.3</td>
                              </tr>
                              <tr data-id="6" data-parent="0" data-level="1">
                                 <td data-column="name">Data 2</td>
                              </tr>
                              <tr data-id="7" data-parent="6" data-level="2">
                                 <td data-column="name">Data 2.1</td>
                              </tr>
                              <tr data-id="8" data-parent="7" data-level="3">
                                 <td data-column="name">Data 2.2</td>
                              </tr>
                              <tr data-id="9" data-parent="8" data-level="4">
                                 <td data-column="name">Data 2.3</td>
                              </tr>
                              <tr data-id="10" data-parent="0" data-level="1">
                                 <td data-column="name">Data 3</td>
                              </tr>
                              <tr data-id="11" data-parent="10" data-level="2">
                                 <td data-column="name">Data 3.1</td>
                              </tr>
                              <tr data-id="12" data-parent="11" data-level="3">
                                 <td data-column="name">Data 3.2</td>
                              </tr>
                              <tr data-id="13" data-parent="12" data-level="4">
                                 <td data-column="name">Data 3.3</td>
                              </tr>
                              <tr data-id="14" data-parent="0" data-level="1">
                                 <td data-column="name">Data 4</td>
                              </tr>
                              <tr data-id="15" data-parent="14" data-level="2">
                                 <td data-column="name">Data 4.1</td>
                              </tr>
                              <tr data-id="16" data-parent="15" data-level="3">
                                 <td data-column="name">Data 4.2</td>
                              </tr>
                              <tr data-id="17" data-parent="16" data-level="4">
                                 <td data-column="name">Data 4.3</td>
                              </tr>
                           </tbody>
                        </table>
                     </div>
                  </div>
               </div>
            </div>
            <div class="col-lg-6">
               <div class="card card-block card-stretch card-height">
                  <div class="card-header d-flex justify-content-between">
                     <div class="header-title">
                        <h4 class="card-title">Tree view</h4>
                     </div>
                  <div class="header-action">
                           <i  type="button" data-toggle="collapse" data-target="#tabletree-3" aria-expanded="false" aria-controls="alert-1">
                              <svg width="20" height="20" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                 <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4" />
                              </svg>
                           </i>
                        </div>
                  </div>
                  <div class="card-body">
                     <div class="collapse" id="tabletree-3">
                           <div class="card"><kbd class="bg-dark"><pre id="tree-view" class="text-white"><code>
&#x3C;table id=&#x22;tree-table-3&#x22; class=&#x22;table table-hover table-bordered mm-bg-primary  tree&#x22;&#x3E;
   &#x3C;thead class=&#x22;bg-primary&#x22;&#x3E;
      &#x3C;tr&#x3E;
         &#x3C;th&#x3E;Demo 3&#x3C;/th&#x3E;
      &#x3C;/tr&#x3E;
   &#x3C;/thead&#x3E;
   &#x3C;tbody&#x3E;
      &#x3C;tr data-id=&#x22;1&#x22; data-parent=&#x22;0&#x22; data-level=&#x22;1&#x22;&#x3E;
         &#x3C;td data-column=&#x22;name&#x22;&#x3E;Data 1&#x3C;/td&#x3E;
      &#x3C;/tr&#x3E;
      &#x3C;tr data-id=&#x22;2&#x22; data-parent=&#x22;1&#x22; data-level=&#x22;2&#x22;&#x3E;
         &#x3C;td data-column=&#x22;name&#x22;&#x3E;Data 1.1&#x3C;/td&#x3E;
      &#x3C;/tr&#x3E;
      &#x3C;tr data-id=&#x22;3&#x22; data-parent=&#x22;2&#x22; data-level=&#x22;3&#x22;&#x3E;
         &#x3C;td data-column=&#x22;name&#x22;&#x3E;Data 1.2&#x3C;/td&#x3E;
      &#x3C;/tr&#x3E;
      &#x3C;tr data-id=&#x22;4&#x22; data-parent=&#x22;3&#x22; data-level=&#x22;4&#x22;&#x3E;
         &#x3C;td data-column=&#x22;name&#x22;&#x3E;Data 1.3&#x3C;/td&#x3E;
      &#x3C;/tr&#x3E;
      &#x3C;tr data-id=&#x22;6&#x22; data-parent=&#x22;0&#x22; data-level=&#x22;1&#x22;&#x3E;
         &#x3C;td data-column=&#x22;name&#x22;&#x3E;Data 2&#x3C;/td&#x3E;
      &#x3C;/tr&#x3E;
      &#x3C;tr data-id=&#x22;7&#x22; data-parent=&#x22;6&#x22; data-level=&#x22;2&#x22;&#x3E;
         &#x3C;td data-column=&#x22;name&#x22;&#x3E;Data 2.1&#x3C;/td&#x3E;
      &#x3C;/tr&#x3E;
      &#x3C;tr data-id=&#x22;8&#x22; data-parent=&#x22;7&#x22; data-level=&#x22;3&#x22;&#x3E;
         &#x3C;td data-column=&#x22;name&#x22;&#x3E;Data 2.2&#x3C;/td&#x3E;
      &#x3C;/tr&#x3E;
      &#x3C;tr data-id=&#x22;9&#x22; data-parent=&#x22;8&#x22; data-level=&#x22;4&#x22;&#x3E;
         &#x3C;td data-column=&#x22;name&#x22;&#x3E;Data 2.3&#x3C;/td&#x3E;
      &#x3C;/tr&#x3E;
      &#x3C;tr data-id=&#x22;10&#x22; data-parent=&#x22;0&#x22; data-level=&#x22;1&#x22;&#x3E;
         &#x3C;td data-column=&#x22;name&#x22;&#x3E;Data 3&#x3C;/td&#x3E;
      &#x3C;/tr&#x3E;
      &#x3C;tr data-id=&#x22;11&#x22; data-parent=&#x22;10&#x22; data-level=&#x22;2&#x22;&#x3E;
         &#x3C;td data-column=&#x22;name&#x22;&#x3E;Data 3.1&#x3C;/td&#x3E;
      &#x3C;/tr&#x3E;
      &#x3C;tr data-id=&#x22;12&#x22; data-parent=&#x22;11&#x22; data-level=&#x22;3&#x22;&#x3E;
         &#x3C;td data-column=&#x22;name&#x22;&#x3E;Data 3.2&#x3C;/td&#x3E;
      &#x3C;/tr&#x3E;
      &#x3C;tr data-id=&#x22;13&#x22; data-parent=&#x22;12&#x22; data-level=&#x22;4&#x22;&#x3E;
         &#x3C;td data-column=&#x22;name&#x22;&#x3E;Data 3.3&#x3C;/td&#x3E;
      &#x3C;/tr&#x3E;
      &#x3C;tr data-id=&#x22;14&#x22; data-parent=&#x22;0&#x22; data-level=&#x22;1&#x22;&#x3E;
         &#x3C;td data-column=&#x22;name&#x22;&#x3E;Data 4&#x3C;/td&#x3E;
      &#x3C;/tr&#x3E;
      &#x3C;tr data-id=&#x22;15&#x22; data-parent=&#x22;14&#x22; data-level=&#x22;2&#x22;&#x3E;
         &#x3C;td data-column=&#x22;name&#x22;&#x3E;Data 4.1&#x3C;/td&#x3E;
      &#x3C;/tr&#x3E;
      &#x3C;tr data-id=&#x22;16&#x22; data-parent=&#x22;15&#x22; data-level=&#x22;3&#x22;&#x3E;
         &#x3C;td data-column=&#x22;name&#x22;&#x3E;Data 4.2&#x3C;/td&#x3E;
      &#x3C;/tr&#x3E;
      &#x3C;tr data-id=&#x22;17&#x22; data-parent=&#x22;16&#x22; data-level=&#x22;4&#x22;&#x3E;
         &#x3C;td data-column=&#x22;name&#x22;&#x3E;Data 4.3&#x3C;/td&#x3E;
      &#x3C;/tr&#x3E;
   &#x3C;/tbody&#x3E;
&#x3C;/table&#x3E;
</code></pre></kbd></div>
                        </div>
                     <div class="table-responsive">
                        <table id="tree-table-3" class="table table-hover table-bordered mm-bg-primary  tree">
                           <thead class="bg-primary">
                              <tr>
                                 <th>Demo 3</th>
                              </tr>
                           </thead>
                           <tbody>
                              <tr data-id="1" data-parent="0" data-level="1">
                                 <td data-column="name">Data 1</td>
                              </tr>
                              <tr data-id="2" data-parent="1" data-level="2">
                                 <td data-column="name">Data 1.1</td>
                              </tr>
                              <tr data-id="3" data-parent="2" data-level="3">
                                 <td data-column="name">Data 1.2</td>
                              </tr>
                              <tr data-id="4" data-parent="3" data-level="4">
                                 <td data-column="name">Data 1.3</td>
                              </tr>
                              <tr data-id="6" data-parent="0" data-level="1">
                                 <td data-column="name">Data 2</td>
                              </tr>
                              <tr data-id="7" data-parent="6" data-level="2">
                                 <td data-column="name">Data 2.1</td>
                              </tr>
                              <tr data-id="8" data-parent="7" data-level="3">
                                 <td data-column="name">Data 2.2</td>
                              </tr>
                              <tr data-id="9" data-parent="8" data-level="4">
                                 <td data-column="name">Data 2.3</td>
                              </tr>
                              <tr data-id="10" data-parent="0" data-level="1">
                                 <td data-column="name">Data 3</td>
                              </tr>
                              <tr data-id="11" data-parent="10" data-level="2">
                                 <td data-column="name">Data 3.1</td>
                              </tr>
                              <tr data-id="12" data-parent="11" data-level="3">
                                 <td data-column="name">Data 3.2</td>
                              </tr>
                              <tr data-id="13" data-parent="12" data-level="4">
                                 <td data-column="name">Data 3.3</td>
                              </tr>
                              <tr data-id="14" data-parent="0" data-level="1">
                                 <td data-column="name">Data 4</td>
                              </tr>
                              <tr data-id="15" data-parent="14" data-level="2">
                                 <td data-column="name">Data 4.1</td>
                              </tr>
                              <tr data-id="16" data-parent="15" data-level="3">
                                 <td data-column="name">Data 4.2</td>
                              </tr>
                              <tr data-id="17" data-parent="16" data-level="4">
                                 <td data-column="name">Data 4.3</td>
                              </tr>
                           </tbody>
                        </table>
                     </div>
                  </div>
               </div>
            </div>
            <div class="col-lg-6">
               <div class="card card-block card-stretch card-height">
                  <div class="card-header d-flex justify-content-between">
                     <div class="header-title">
                        <h4 class="card-title">Avatar Sizing</h4>
                     </div>
                  <div class="header-action">
                           <i  type="button" data-toggle="collapse" data-target="#tabletree-4" aria-expanded="false" aria-controls="alert-1">
                              <svg width="20" height="20" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                 <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4" />
                              </svg>
                           </i>
                        </div>
                  </div>
                  <div class="card-body">
                     <div class="collapse" id="tabletree-4">
                           <div class="card"><kbd class="bg-dark"><pre id="avatar-sizing2" class="text-white"><code>
&#x3C;table id=&#x22;tree-table-4&#x22; class=&#x22;table table-hover table-bordered mm-bg-success  tree&#x22;&#x3E;
   &#x3C;thead class=&#x22;bg-success&#x22;&#x3E;
      &#x3C;tr&#x3E;
         &#x3C;th&#x3E;Demo 4&#x3C;/th&#x3E;
      &#x3C;/tr&#x3E;
   &#x3C;/thead&#x3E;
   &#x3C;tbody&#x3E;
      &#x3C;tr data-id=&#x22;1&#x22; data-parent=&#x22;0&#x22; data-level=&#x22;1&#x22;&#x3E;
         &#x3C;td data-column=&#x22;name&#x22;&#x3E;Data 1&#x3C;/td&#x3E;
      &#x3C;/tr&#x3E;
      &#x3C;tr data-id=&#x22;2&#x22; data-parent=&#x22;1&#x22; data-level=&#x22;2&#x22;&#x3E;
         &#x3C;td data-column=&#x22;name&#x22;&#x3E;Data 1.1&#x3C;/td&#x3E;
      &#x3C;/tr&#x3E;
      &#x3C;tr data-id=&#x22;3&#x22; data-parent=&#x22;2&#x22; data-level=&#x22;3&#x22;&#x3E;
         &#x3C;td data-column=&#x22;name&#x22;&#x3E;Data 1.2&#x3C;/td&#x3E;
      &#x3C;/tr&#x3E;
      &#x3C;tr data-id=&#x22;4&#x22; data-parent=&#x22;3&#x22; data-level=&#x22;4&#x22;&#x3E;
         &#x3C;td data-column=&#x22;name&#x22;&#x3E;Data 1.3&#x3C;/td&#x3E;
      &#x3C;/tr&#x3E;
      &#x3C;tr data-id=&#x22;6&#x22; data-parent=&#x22;0&#x22; data-level=&#x22;1&#x22;&#x3E;
         &#x3C;td data-column=&#x22;name&#x22;&#x3E;Data 2&#x3C;/td&#x3E;
      &#x3C;/tr&#x3E;
      &#x3C;tr data-id=&#x22;7&#x22; data-parent=&#x22;6&#x22; data-level=&#x22;2&#x22;&#x3E;
         &#x3C;td data-column=&#x22;name&#x22;&#x3E;Data 2.1&#x3C;/td&#x3E;
      &#x3C;/tr&#x3E;
      &#x3C;tr data-id=&#x22;8&#x22; data-parent=&#x22;7&#x22; data-level=&#x22;3&#x22;&#x3E;
         &#x3C;td data-column=&#x22;name&#x22;&#x3E;Data 2.2&#x3C;/td&#x3E;
      &#x3C;/tr&#x3E;
      &#x3C;tr data-id=&#x22;9&#x22; data-parent=&#x22;8&#x22; data-level=&#x22;4&#x22;&#x3E;
         &#x3C;td data-column=&#x22;name&#x22;&#x3E;Data 2.3&#x3C;/td&#x3E;
      &#x3C;/tr&#x3E;
      &#x3C;tr data-id=&#x22;10&#x22; data-parent=&#x22;0&#x22; data-level=&#x22;1&#x22;&#x3E;
         &#x3C;td data-column=&#x22;name&#x22;&#x3E;Data 3&#x3C;/td&#x3E;
      &#x3C;/tr&#x3E;
      &#x3C;tr data-id=&#x22;11&#x22; data-parent=&#x22;10&#x22; data-level=&#x22;2&#x22;&#x3E;
         &#x3C;td data-column=&#x22;name&#x22;&#x3E;Data 3.1&#x3C;/td&#x3E;
      &#x3C;/tr&#x3E;
      &#x3C;tr data-id=&#x22;12&#x22; data-parent=&#x22;11&#x22; data-level=&#x22;3&#x22;&#x3E;
         &#x3C;td data-column=&#x22;name&#x22;&#x3E;Data 3.2&#x3C;/td&#x3E;
      &#x3C;/tr&#x3E;
      &#x3C;tr data-id=&#x22;13&#x22; data-parent=&#x22;12&#x22; data-level=&#x22;4&#x22;&#x3E;
         &#x3C;td data-column=&#x22;name&#x22;&#x3E;Data 3.3&#x3C;/td&#x3E;
      &#x3C;/tr&#x3E;
      &#x3C;tr data-id=&#x22;14&#x22; data-parent=&#x22;0&#x22; data-level=&#x22;1&#x22;&#x3E;
         &#x3C;td data-column=&#x22;name&#x22;&#x3E;Data 4&#x3C;/td&#x3E;
      &#x3C;/tr&#x3E;
      &#x3C;tr data-id=&#x22;15&#x22; data-parent=&#x22;14&#x22; data-level=&#x22;2&#x22;&#x3E;
         &#x3C;td data-column=&#x22;name&#x22;&#x3E;Data 4.1&#x3C;/td&#x3E;
      &#x3C;/tr&#x3E;
      &#x3C;tr data-id=&#x22;16&#x22; data-parent=&#x22;15&#x22; data-level=&#x22;3&#x22;&#x3E;
         &#x3C;td data-column=&#x22;name&#x22;&#x3E;Data 4.2&#x3C;/td&#x3E;
      &#x3C;/tr&#x3E;
      &#x3C;tr data-id=&#x22;17&#x22; data-parent=&#x22;16&#x22; data-level=&#x22;4&#x22;&#x3E;
         &#x3C;td data-column=&#x22;name&#x22;&#x3E;Data 4.3&#x3C;/td&#x3E;
      &#x3C;/tr&#x3E;
   &#x3C;/tbody&#x3E;
&#x3C;/table&#x3E;
</code></pre></kbd></div>
                        </div>
                     <div class="table-responsive">
                        <table id="tree-table-4" class="table table-hover table-bordered mm-bg-success  tree">
                           <thead class="bg-success">
                              <tr>
                                 <th>Demo 4</th>
                              </tr>
                           </thead>
                           <tbody>
                              <tr data-id="1" data-parent="0" data-level="1">
                                 <td data-column="name">Data 1</td>
                              </tr>
                              <tr data-id="2" data-parent="1" data-level="2">
                                 <td data-column="name">Data 1.1</td>
                              </tr>
                              <tr data-id="3" data-parent="2" data-level="3">
                                 <td data-column="name">Data 1.2</td>
                              </tr>
                              <tr data-id="4" data-parent="3" data-level="4">
                                 <td data-column="name">Data 1.3</td>
                              </tr>
                              <tr data-id="6" data-parent="0" data-level="1">
                                 <td data-column="name">Data 2</td>
                              </tr>
                              <tr data-id="7" data-parent="6" data-level="2">
                                 <td data-column="name">Data 2.1</td>
                              </tr>
                              <tr data-id="8" data-parent="7" data-level="3">
                                 <td data-column="name">Data 2.2</td>
                              </tr>
                              <tr data-id="9" data-parent="8" data-level="4">
                                 <td data-column="name">Data 2.3</td>
                              </tr>
                              <tr data-id="10" data-parent="0" data-level="1">
                                 <td data-column="name">Data 3</td>
                              </tr>
                              <tr data-id="11" data-parent="10" data-level="2">
                                 <td data-column="name">Data 3.1</td>
                              </tr>
                              <tr data-id="12" data-parent="11" data-level="3">
                                 <td data-column="name">Data 3.2</td>
                              </tr>
                              <tr data-id="13" data-parent="12" data-level="4">
                                 <td data-column="name">Data 3.3</td>
                              </tr>
                              <tr data-id="14" data-parent="0" data-level="1">
                                 <td data-column="name">Data 4</td>
                              </tr>
                              <tr data-id="15" data-parent="14" data-level="2">
                                 <td data-column="name">Data 4.1</td>
                              </tr>
                              <tr data-id="16" data-parent="15" data-level="3">
                                 <td data-column="name">Data 4.2</td>
                              </tr>
                              <tr data-id="17" data-parent="16" data-level="4">
                                 <td data-column="name">Data 4.3</td>
                              </tr>
                           </tbody>
                        </table>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
</x-app-layout>
