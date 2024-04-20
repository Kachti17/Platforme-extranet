<template>
    <div class="row">
      <div class="col-sm-12">
        <div class="card position-relative inner-page-bg bg-primary" style="height: 150px;">
          <div class="inner-page-title">
            <h3 class="text-white">Alert Page</h3>
            <p class="text-white">lorem ipsum</p>
          </div>
        </div>
      </div>
      <div class="col-sm-12 col-lg-6">
        <iq-card>
          <template v-slot:headerTitle>
              <h4 class="card-title">Basic Alerts</h4>
          </template>
          <template v-slot:headerAction>
            <collapse className="text-primary float-right"  data-bs-toggle="collapse" collapseTarget="example-collapse" ariaControls="example-collapse">
              <i class="ri-code-s-slash-line" />
            </collapse>
          </template>
          <template v-slot:body>
            <p class="mb-4">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever</p>
             <collapse-content id="example-collapse" className="mb-2">
                <div class="card card-body">
                  <kbd class="bg-dark">
                    <a href="javascript:void(0)"  data-copy-target="#basic-alert" title="Copy" class="text-white float-right" data-copy="true">Copy</a>
                    <pre class="text-white" id="basic-alert"><code>
  &lt;alert :show="true" variant="primary"&gt;
    &lt;div class="iq-alert-text"&gt;A simple &lt;b&gt;primary&lt;/b&gt; alert—check it out!&lt;/div&gt;
  &lt;/alert&gt;
  &lt;alert :show="true" variant="secondary"&gt;
    &lt;div class="iq-alert-text"&gt;A simple &lt;b&gt;secondary&lt;/b&gt; alert—check it out!&lt;/div&gt;
  &lt;/alert&gt;
  &lt;alert :show="true" variant="success"&gt;
    &lt;div class="iq-alert-text"&gt;A simple &lt;b&gt;success&lt;/b&gt; alert—check it out!&lt;/div&gt;
  &lt;/alert&gt;
  &lt;alert :show="true" variant="danger"&gt;
    &lt;div class="iq-alert-text"&gt;A simple &lt;b&gt;danger&lt;/b&gt; alert—check it out!&lt;/div&gt;
  &lt;/alert&gt;
  &lt;alert :show="true" variant="warning"&gt;
    &lt;div class="iq-alert-text"&gt;A simple &lt;b&gt;warning&lt;/b&gt; alert—check it out!&lt;/div&gt;
  &lt;/alert&gt;
  &lt;alert :show="true" variant="info"&gt;
    &lt;div class="iq-alert-text"&gt;A simple &lt;b&gt;info&lt;/b&gt; alert—check it out!&lt;/div&gt;
  &lt;/alert&gt;
  &lt;alert :show="true" variant="light"&gt;
    &lt;div class="iq-alert-text"&gt;A simple &lt;b&gt;light&lt;/b&gt; alert—check it out!&lt;/div&gt;
  &lt;/alert&gt;
  </code></pre>
                  </kbd>
                </div>
              </collapse-content>
              <alert variant="success" :isdismissable="true" className="fade show mb-3">
              <template v-slot>
                <span class="d-flex"><i class="material-symbols-outlined me-2">thumb_up</i> This is a success alert—check it out!</span>
                <!-- <span> This is a success alert—check it out!</span> -->
              </template>
            </alert>
            <alert variant="info" :isdismissable="true" className="fade show mb-3">
              <template v-slot>
                <span class="d-flex"><i class="material-symbols-outlined me-2">notifications</i>This is a info alert—check it out!</span>
              </template>
            </alert>
            <alert variant="warning" :isdismissable="true" className="fade show mb-3">
              <template v-slot>
                <span class="d-flex"><i class="material-symbols-outlined me-2">notifications</i> This is a warning alert—check it out!</span>
              </template>
            </alert>
            <alert variant="danger" :isdismissable="true" className="fade show">
              <template v-slot>
                <span class="d-flex"><i class="material-symbols-outlined me-2">rotate_right</i> This is a danger alert—check it out!</span>
              </template>
            </alert>
          </template>
        </iq-card>
      </div>
      <div class="col-md-6">
        <iq-card>
          <template v-slot:headerTitle>
            <h4 class="card-title">Basic Alerts With Icons</h4>
          </template>
          <template v-slot:headerAction>
            <collapse className="text-primary float-right"  data-bs-toggle="collapse" collapseTarget="example-collapse1" ariaControls="example-collapse1">
              <i class="ri-code-s-slash-line" />
            </collapse>
          </template>
          <template v-slot:body>
            <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
              <symbol id="check-circle-fill" fill="currentColor" viewBox="0 0 16 16">
                    <path
                       d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z" />
              </symbol>
              <symbol id="info-fill" fill="currentColor" viewBox="0 0 16 16">
                    <path
                       d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm.93-9.412-1 4.705c-.07.34.029.533.304.533.194 0 .487-.07.686-.246l-.088.416c-.287.346-.92.598-1.465.598-.703 0-1.002-.422-.808-1.319l.738-3.468c.064-.293.006-.399-.287-.47l-.451-.081.082-.381 2.29-.287zM8 5.5a1 1 0 1 1 0-2 1 1 0 0 1 0 2z" />
              </symbol>
              <symbol id="exclamation-triangle-fill" fill="currentColor" viewBox="0 0 16 16">
                    <path
                       d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z" />
              </symbol>
            </svg>
            <collapse-content id="example-collapse1" className="mb-2">
              <div class="card">
                <kbd class="bg-dark">
                  <a href="javascript:void(0)" data-copy-target="#basic-alert" title="Copy" class="text-white float-right" data-copy="true">Copy</a>
                  <pre class="text-white" id="basic-alert-icon"><code>
&lt;alert :show="true" variant="primary"&gt;
  &lt;div class="iq-alert-icon"&gt;
    &lt;i class="ri-alert-line"&gt;&lt;/i&gt;
  &lt;/div&gt;
  &lt;div class="iq-alert-text"&gt;A simple &lt;b&gt;primary&lt;/b&gt; alert—check it out!&lt;/div&gt;
&lt;/alert&gt;
&lt;alert :show="true" variant="secondary"&gt;
  &lt;div class="iq-alert-icon"&gt;
    &lt;i class="ri-information-line"&gt;&lt;/i&gt;
  &lt;/div&gt;
  &lt;div class="iq-alert-text"&gt;A simple &lt;b&gt;secondary&lt;/b&gt; alert—check it out!&lt;/div&gt;
&lt;/alert&gt;
&lt;alert :show="true" variant="success"&gt;
  &lt;div class="iq-alert-icon"&gt;
    &lt;i class="ri-alert-line"&gt;&lt;/i&gt;
  &lt;/div&gt;
  &lt;div class="iq-alert-text"&gt;A simple &lt;b&gt;success&lt;/b&gt; alert—check it out!&lt;/div&gt;
&lt;/alert&gt;
&lt;alert :show="true" variant="danger"&gt;
  &lt;div class="iq-alert-icon"&gt;
    &lt;i class="ri-information-line"&gt;&lt;/i&gt;
  &lt;/div&gt;
  &lt;div class="iq-alert-text"&gt;A simple &lt;b&gt;danger&lt;/b&gt; alert—check it out!&lt;/div&gt;
&lt;/alert&gt;
&lt;alert :show="true" variant="warning"&gt;
  &lt;div class="iq-alert-icon"&gt;
    &lt;i class="ri-alert-line"&gt;&lt;/i&gt;
  &lt;/div&gt;
  &lt;div class="iq-alert-text"&gt;A simple &lt;b&gt;warning&lt;/b&gt; alert—check it out!&lt;/div&gt;
&lt;/alert&gt;
&lt;alert :show="true" variant="info"&gt;
  &lt;div class="iq-alert-icon"&gt;
    &lt;i class="ri-information-line"&gt;&lt;/i&gt;
  &lt;/div&gt;
  &lt;div class="iq-alert-text"&gt;A simple &lt;b&gt;info&lt;/b&gt; alert—check it out!&lt;/div&gt;
&lt;/alert&gt;
&lt;alert :show="true" variant="light"&gt;
  &lt;div class="iq-alert-icon"&gt;
    &lt;i class="ri-alert-line"&gt;&lt;/i&gt;
  &lt;/div&gt;
  &lt;div class="iq-alert-text"&gt;A simple &lt;b&gt;light&lt;/b&gt; alert—check it out!&lt;/div&gt;
&lt;/alert&gt;
</code></pre>
                </kbd>
              </div>
            </collapse-content>
            <alert variant="primary" className="d-flex align-items-center">
              <template v-slot>
                <svg class="bi flex-shrink-0 me-2" width="24" height="24">
                  <use xlink:href="#info-fill" />
               </svg>
              <div>
                    An example alert with an icon
              </div>
              </template>
            </alert>
            <alert :show="true" variant="success" className="d-flex align-items-center">
              <template v-slot>
                <svg class="bi flex-shrink-0 me-2" width="24" height="24">
                  <use xlink:href="#exclamation-triangle-fill" />
               </svg>
              <div>
                    An example success alert with an icon
              </div>
              </template>
            </alert>
            <alert :show="true" variant="warning" className="d-flex align-items-center">
              <template v-slot>
                <svg class="bi flex-shrink-0 me-2" width="24" height="24">
                  <use xlink:href="#exclamation-triangle-fill" />
                </svg>
              <div>
                    An example warning alert with an icon
              </div>
              </template>
            </alert>
            <alert :show="true" variant="danger" className="d-flex align-items-center">
              <template v-slot>
                <svg class="bi flex-shrink-0 me-2" width="24" height="24">
                  <use xlink:href="#exclamation-triangle-fill" />
                </svg>
              <div>
                    An example danger alert with an icon
              </div>
              </template>
            </alert>
          </template>
        </iq-card>
      </div>
    </div>
    <div class="row">
      <div class="col-md-6">
        <iq-card>
          <template v-slot:headerTitle>
            <h4 class="card-title">Basic Line Alerts</h4>
          </template>
          <template v-slot:headerAction>
            <collapse className="text-primary float-right"  data-bs-toggle="collapse" collapseTarget="example-collapse2" ariaControls="example-collapse2">
              <i class="ri-code-s-slash-line" />
            </collapse>
          </template>
          <template v-slot:body>
            <collapse-content id="example-collapse2" class="mb-2">
              <div class="card">
                <kbd class="bg-dark">
                                    <a href="javascript:void(0)"  data-copy-target="#basic-alert" title="Copy" class="text-white float-right" data-copy="true">Copy</a>
                  <pre class="text-white" id="basic-line-alert"><code>
&lt;alert :show="true" variant="primary" class="bg-white"&gt;
  &lt;div class="iq-alert-text"&gt;A simple &lt;b&gt;primary&lt;/b&gt; alert—check it out!&lt;/div&gt;
&lt;/alert&gt;
&lt;alert :show="true" variant="secondary" class="bg-white"&gt;
  &lt;div class="iq-alert-text"&gt;A simple &lt;b&gt;secondary&lt;/b&gt; alert—check it out!&lt;/div&gt;
&lt;/alert&gt;
&lt;alert :show="true" variant="success" class="bg-white"&gt;
  &lt;div class="iq-alert-text"&gt;A simple &lt;b&gt;success&lt;/b&gt; alert—check it out!&lt;/div&gt;
&lt;/alert&gt;
&lt;alert :show="true" variant="danger" class="bg-white"&gt;
  &lt;div class="iq-alert-text"&gt;A simple &lt;b&gt;danger&lt;/b&gt; alert—check it out!&lt;/div&gt;
&lt;/alert&gt;
&lt;alert :show="true" variant="warning" class="bg-white"&gt;
  &lt;div class="iq-alert-text"&gt;A simple &lt;b&gt;warning&lt;/b&gt; alert—check it out!&lt;/div&gt;
&lt;/alert&gt;
&lt;alert :show="true" variant="info" class="bg-white"&gt;
  &lt;div class="iq-alert-text"&gt;A simple &lt;b&gt;info&lt;/b&gt; alert—check it out!&lt;/div&gt;
&lt;/alert&gt;
&lt;alert :show="true" variant="light" class="bg-white"&gt;
  &lt;div class="iq-alert-text"&gt;A simple &lt;b&gt;light&lt;/b&gt; alert—check it out!&lt;/div&gt;
&lt;/alert&gt;
</code></pre>
                </kbd>
              </div>
            </collapse-content>
            <alert variant="primary" className="d-flex align-items-center alert-solid">
              <template v-slot>
                <svg class="bi flex-shrink-0 me-2" width="24" height="24">
                  <use xlink:href="#info-fill" />
               </svg>
              <div>
                    An example alert with an icon
              </div>
              </template>
            </alert>
            <alert variant="success" :isdismissable="true" className="fade show alert-solid mb-3" buttonClass="btn-close-white">
              <template v-slot>
              <span class="d-flex"><i class="material-symbols-outlined me-2">thumb_up</i>This is a success alert—check it out!</span>
              </template>
            </alert>
            <alert variant="info" :isdismissable="true" className="fade show alert-solid mb-3" buttonClass="btn-close-white">
              <template v-slot>
                <span class="d-flex"><i class="material-symbols-outlined me-2">notifications</i> This is a info alert—check it out!</span>
              </template>
            </alert>
            <alert variant="warning" :isdismissable="true" className="fade show alert-solid mb-3" buttonClass="btn-close-white">
              <template v-slot>
                <span class="d-flex"><i class="material-symbols-outlined me-2">notifications</i> This is a info alert—check it out!</span>
              </template>
            </alert>
            <alert variant="danger" :isdismissable="true" className="fade show alert-solid mb-3" buttonClass="btn-close-white">
              <template v-slot>
                <span class="d-flex"><i class="material-symbols-outlined me-2">rotate_right</i> This is a info alert—check it out!</span>
              </template>
            </alert>
          </template>
        </iq-card>
      </div>
      <div class="col-md-6">
        <iq-card>
          <template v-slot:headerTitle>
            <h4 class="card-title">Basic Line Alerts With Icons</h4>
          </template>
          <template v-slot:headerAction>
            <collapse className="text-primary float-right"  data-bs-toggle="collapse" collapseTarget="example-collapse3" ariaControls="example-collapse3">
              <i class="ri-code-s-slash-line" />
            </collapse>
          </template>
          <template v-slot:body>
            <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
              <symbol id="check-circle-fill" fill="currentColor" viewBox="0 0 16 16">
                    <path
                       d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z" />
              </symbol>
              <symbol id="info-fill" fill="currentColor" viewBox="0 0 16 16">
                    <path
                       d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm.93-9.412-1 4.705c-.07.34.029.533.304.533.194 0 .487-.07.686-.246l-.088.416c-.287.346-.92.598-1.465.598-.703 0-1.002-.422-.808-1.319l.738-3.468c.064-.293.006-.399-.287-.47l-.451-.081.082-.381 2.29-.287zM8 5.5a1 1 0 1 1 0-2 1 1 0 0 1 0 2z" />
              </symbol>
              <symbol id="exclamation-triangle-fill" fill="currentColor" viewBox="0 0 16 16">
                    <path
                       d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z" />
              </symbol>
           </svg>
            <collapse-content id="example-collapse3" class="mb-2">
              <div class="card">
                <kbd class="bg-dark">
                                    <a href="javascript:void(0)"  data-copy-target="#basic-alert" title="Copy" class="text-white float-right" data-copy="true">Copy</a>
                  <pre class="text-white" id="basic-line-alert-icon"><code>
&lt;alert :show="true" variant="primary" class="bg-white"&gt;
  &lt;div class="iq-alert-icon"&gt;
    &lt;i class="ri-alert-line"&gt;&lt;/i&gt;
  &lt;/div&gt;
  &lt;div class="iq-alert-text"&gt;A simple &lt;b&gt;primary&lt;/b&gt; alert—check it out!&lt;/div&gt;
&lt;/alert&gt;
&lt;alert :show="true" variant="secondary" class="bg-white"&gt;
  &lt;div class="iq-alert-icon"&gt;
    &lt;i class="ri-information-line"&gt;&lt;/i&gt;
  &lt;/div&gt;
  &lt;div class="iq-alert-text"&gt;A simple &lt;b&gt;secondary&lt;/b&gt; alert—check it out!&lt;/div&gt;
&lt;/alert&gt;
&lt;alert :show="true" variant="success" class="bg-white"&gt;
  &lt;div class="iq-alert-icon"&gt;
    &lt;i class="ri-alert-line"&gt;&lt;/i&gt;
  &lt;/div&gt;
  &lt;div class="iq-alert-text"&gt;A simple &lt;b&gt;success&lt;/b&gt; alert—check it out!&lt;/div&gt;
&lt;/alert&gt;
&lt;alert :show="true" variant="danger" class="bg-white"&gt;
  &lt;div class="iq-alert-icon"&gt;
    &lt;i class="ri-information-line"&gt;&lt;/i&gt;
  &lt;/div&gt;
  &lt;div class="iq-alert-text"&gt;A simple &lt;b&gt;danger&lt;/b&gt; alert—check it out!&lt;/div&gt;
&lt;/alert&gt;
&lt;alert :show="true" variant="warning" class="bg-white"&gt;
  &lt;div class="iq-alert-icon"&gt;
    &lt;i class="ri-alert-line"&gt;&lt;/i&gt;
  &lt;/div&gt;
  &lt;div class="iq-alert-text"&gt;A simple &lt;b&gt;warning&lt;/b&gt; alert—check it out!&lt;/div&gt;
&lt;/alert&gt;
&lt;alert :show="true" variant="info" class="bg-white"&gt;
  &lt;div class="iq-alert-icon"&gt;
    &lt;i class="ri-information-line"&gt;&lt;/i&gt;
  &lt;/div&gt;
  &lt;div class="iq-alert-text"&gt;A simple &lt;b&gt;info&lt;/b&gt; alert—check it out!&lt;/div&gt;
&lt;/alert&gt;
&lt;alert :show="true" variant="light" class="bg-white"&gt;
  &lt;div class="iq-alert-icon"&gt;
    &lt;i class="ri-alert-line"&gt;&lt;/i&gt;
  &lt;/div&gt;
  &lt;div class="iq-alert-text"&gt;A simple &lt;b&gt;light&lt;/b&gt; alert—check it out!&lt;/div&gt;
&lt;/alert&gt;
</code></pre>
                </kbd>
              </div>
            </collapse-content>
            <alert variant="primary" className="d-flex align-items-center alert-solid">
              <template v-slot>
                <svg class="bi flex-shrink-0 me-2" width="24" height="24">
                  <use xlink:href="#info-fill" />
               </svg>
              <div>
                    An example primary alert with an icon
              </div>
              </template>
            </alert>
            <alert variant="success" className="d-flex align-items-center alert-solid">
              <template v-slot>
                <svg class="bi flex-shrink-0 me-2" width="24" height="24">
                  <use xlink:href="#exclamation-triangle-fill" />
               </svg>
              <div>
                    An example success alert with an icon
              </div>
              </template>
            </alert>
            <alert variant="warning" className="d-flex align-items-center alert-solid">
              <template v-slot>
                <svg class="bi flex-shrink-0 me-2" width="24" height="24">
                  <use xlink:href="#exclamation-triangle-fill" />
               </svg>
              <div>
                    An example warning alert with an icon
              </div>
              </template>
            </alert>
            <alert variant="danger" className="d-flex align-items-center alert-solid">
              <template v-slot>
                <svg class="bi flex-shrink-0 me-2" width="24" height="24">
                  <use xlink:href="#exclamation-triangle-fill" />
               </svg>
              <div>
                    An example danger alert with an icon
              </div>
              </template>
            </alert>
          </template>
        </iq-card>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12">
        <iq-card>
          <template v-slot:headerTitle>
            <h4 class="card-title">Alerts With Background</h4>
          </template>
          <template v-slot:headerAction>
            <collapse className="text-primary float-right"  data-bs-toggle="collapse" collapseTarget="example-collapse4" ariaControls="example-collapse4">
              <i class="ri-code-s-slash-line" />
            </collapse>
          </template>
          <template v-slot:body>
            <collapse-content id="example-collapse4" class="mb-2">
              <div class="card">
                <kbd class="bg-dark">
                                    <a href="javascript:void(0)"  data-copy-target="#basic-alert" title="Copy" class="text-white float-right" data-copy="true">Copy</a>
                  <pre class="text-white" id="alert-with-background"><code>
&lt;alert :show="true" variant=" " class="text-white bg-primary"&gt;
  &lt;div class="iq-alert-text"&gt;A simple &lt;b&gt;primary&lt;/b&gt; alert—check it out!&lt;/div&gt;
&lt;/alert&gt;
&lt;alert :show="true" variant=" " class="text-white bg-secondary"&gt;
  &lt;div class="iq-alert-text"&gt;A simple &lt;b&gt;secondary&lt;/b&gt; alert—check it out!&lt;/div&gt;
&lt;/alert&gt;
&lt;alert :show="true" variant=" " class="text-white bg-success"&gt;
  &lt;div class="iq-alert-text"&gt;A simple &lt;b&gt;success&lt;/b&gt; alert—check it out!&lt;/div&gt;
&lt;/alert&gt;
&lt;alert :show="true" variant=" " class="text-white bg-danger"&gt;
  &lt;div class="iq-alert-text"&gt;A simple &lt;b&gt;danger&lt;/b&gt; alert—check it out!&lt;/div&gt;
&lt;/alert&gt;
&lt;alert :show="true" variant=" " class="text-white bg-warning"&gt;
  &lt;div class="iq-alert-text"&gt;A simple &lt;b&gt;warning&lt;/b&gt; alert—check it out!&lt;/div&gt;
&lt;/alert&gt;
&lt;alert :show="true" variant=" "  class="text-white bg-info"&gt;
  &lt;div class="iq-alert-text"&gt;A simple &lt;b&gt;info&lt;/b&gt; alert—check it out!&lt;/div&gt;
&lt;/alert&gt;
&lt;alert :show="true" variant=" " class="bg-light"&gt;
  &lt;div class="iq-alert-text"&gt;A simple &lt;b&gt;light&lt;/b&gt; alert—check it out!&lt;/div&gt;
&lt;/alert&gt;
</code></pre>
                </kbd>
              </div>
            </collapse-content>
            <alert variant="success" :isdismissable="true" className="fade show alert-left mb-3">
              <template v-slot>
                <span class="d-flex"><i class="material-symbols-outlined me-2">thumb_up</i>This is a success alert—check it out!</span>
              </template>
            </alert>
            <alert variant="info" :isdismissable="true" className="fade show alert-top mb-3">
              <template v-slot>
                <span class="d-flex"><i class="material-symbols-outlined me-2">notifications</i> This is a success alert—check it out!</span>
              </template>
            </alert>
            <alert variant="warning" :isdismissable="true" className="fade show alert-right mb-3">
              <template v-slot>
                <span class="d-flex"><i class="material-symbols-outlined me-2">notifications</i> This is a success alert—check it out!</span>
              </template>
            </alert>
            <alert variant="danger" :isdismissable="true" className="fade show alert-bottom mb-3">
              <template v-slot>
                <span class="d-flex"><i class="material-symbols-outlined ME-2">rotate_right</i> This is a success alert—check it out!</span>
              </template>
            </alert>
          </template>
        </iq-card>
      </div>
      <div class="col-md-12">
        <iq-card>
          <template v-slot:headerTitle>
            <h4 class="card-title">For Banners</h4>
          </template>
          <template v-slot:headerAction>
            <collapse className="text-primary float-right"  data-bs-toggle="collapse" collapseTarget="example-collapse5" ariaControls="example-collapse5">
              <i class="ri-code-s-slash-line" />
            </collapse>
          </template>
          <template v-slot:body>
            <collapse-content id="example-collapse5" class="mb-2">
              <div class="card">
                <kbd class="bg-dark">
                                    <a href="javascript:void(0)"  data-copy-target="#basic-alert" title="Copy" class="text-white float-right" data-copy="true">Copy</a>
                  <pre class="text-white" id="alert-with-background-icon"><code>
&lt;alert :show="true" variant=" " class="text-white bg-primary"&gt;
  &lt;div class="iq-alert-icon"&gt;
    &lt;i class="ri-alert-line"&gt;&lt;/i&gt;
  &lt;/div&gt;
  &lt;div class="iq-alert-text"&gt;A simple &lt;b&gt;primary&lt;/b&gt; alert—check it out!&lt;/div&gt;
&lt;/alert&gt;
&lt;alert :show="true" variant=" " class="text-white bg-secondary"&gt;
  &lt;div class="iq-alert-icon"&gt;
    &lt;i class="ri-information-line"&gt;&lt;/i&gt;
  &lt;/div&gt;
  &lt;div class="iq-alert-text"&gt;A simple &lt;b&gt;secondary&lt;/b&gt; alert—check it out!&lt;/div&gt;
&lt;/alert&gt;
&lt;alert :show="true" variant=" " class="text-white bg-success"&gt;
  &lt;div class="iq-alert-icon"&gt;
    &lt;i class="ri-alert-line"&gt;&lt;/i&gt;
  &lt;/div&gt;
  &lt;div class="iq-alert-text"&gt;A simple &lt;b&gt;success&lt;/b&gt; alert—check it out!&lt;/div&gt;
&lt;/alert&gt;
&lt;alert :show="true" variant=" " class="text-white bg-danger"&gt;
  &lt;div class="iq-alert-icon"&gt;
    &lt;i class="ri-information-line"&gt;&lt;/i&gt;
  &lt;/div&gt;
  &lt;div class="iq-alert-text"&gt;A simple &lt;b&gt;danger&lt;/b&gt; alert—check it out!&lt;/div&gt;
&lt;/alert&gt;
&lt;alert :show="true" variant=" " class="text-white bg-warning"&gt;
  &lt;div class="iq-alert-icon"&gt;
    &lt;i class="ri-alert-line"&gt;&lt;/i&gt;
  &lt;/div&gt;
  &lt;div class="iq-alert-text"&gt;A simple &lt;b&gt;warning&lt;/b&gt; alert—check it out!&lt;/div&gt;
&lt;/alert&gt;
&lt;alert :show="true" variant=" " class="text-white bg-info"&gt;
  &lt;div class="iq-alert-icon"&gt;
    &lt;i class="ri-information-line"&gt;&lt;/i&gt;
  &lt;/div&gt;
  &lt;div class="iq-alert-text"&gt;A simple &lt;b&gt;info&lt;/b&gt; alert—check it out!&lt;/div&gt;
&lt;/alert&gt;
&lt;alert :show="true" variant=" " class="bg-light"&gt;
  &lt;div class="iq-alert-icon"&gt;
    &lt;i class="ri-alert-line"&gt;&lt;/i&gt;
  &lt;/div&gt;
  &lt;div class="iq-alert-text"&gt;A simple &lt;b&gt;light&lt;/b&gt; alert—check it out!&lt;/div&gt;
&lt;/alert&gt;
</code></pre>
                </kbd>
              </div>
            </collapse-content>
            <alert variant="warning" :isdismissable="true" className="fade show rounded-0 mb-3">
              <template v-slot>
                 <span class="d-flex"><i class="material-symbols-outlined me-2">rotate_right</i> This is a success alert—check it out!</span>
              </template>
            </alert>
            <alert variant="warning" :isdismissable="true" className="fade show rounded-0 alert-solid mb-3" buttonClass="btn-close-white">
              <template v-slot>
                 <span class="d-flex"><i class="material-symbols-outlined me-2">rotate_right</i> This is a success alert—check it out!</span>
              </template>
            </alert>
          </template>
        </iq-card>
      </div>
    </div>
</template>
<script>

export default {
  name: 'UiAlerts'
}
</script>
