<template>
    <div class="row">
      <div class="col-sm-12">
          <div class="card position-relative inner-page-bg bg-primary" style="height: 150px;">
            <div class="inner-page-title">
                <h3 class="text-white">Notification Page</h3>
                <p class="text-white">lorem ipsum</p>
            </div>
          </div>
      </div>
      <div class="col-lg-6">
        <iq-card>
          <template v-slot:headerTitle>
            <h4 class="card-title">Notifications</h4>
          </template>
          <template v-slot:headerAction>
          <collapse className="text-primary float-right"  data-bs-toggle="collapse" collapseTarget="example-collapse" ariaControls="example-collapse">
            <i class="ri-code-s-slash-line" />
          </collapse>
          </template>
          <template v-slot:body>
            <p>Toasts are as flexible as you need and have very little required markup. At a minimum, we require a single element to contain your “toasted” content and strongly encourage a dismiss button.</p>
            <collapse-content id="example-collapse" class="mb-2">
              <div class="card">
                <kbd class="bg-dark">
                  <pre class="text-white" id="notification-1">
                    <code>
&lt;toast className=&quot;fade show&quot;&gt;
  &lt;toast-header&gt;
    &lt;svg class=&quot;bd-placeholder-img rounded me-2&quot; width=&quot;20&quot; height=&quot;20&quot; xmlns=&quot;http://www.w3.org/2000/svg&quot; preserveAspectRatio=&quot;xMidYMid slice&quot; focusable=&quot;false&quot; role=&quot;img&quot;&gt;
      &lt;rect width=&quot;100%&quot; height=&quot;100%&quot; fill=&quot;#007aff&quot;&gt;&lt;/rect&gt;
    &lt;/svg&gt;
    &lt;strong class=&quot;me-auto&quot;&gt;Bootstrap&lt;/strong&gt;
    &lt;small&gt;11 mins ago&lt;/small&gt;
    &lt;button :dismissable=&quot;true&quot; type=&quot;button&quot; :class=&quot;`btn-close ${buttonClass}`&quot; data-bs-dismiss=&quot;toast&quot; aria-label=&quot;Close&quot;&gt;&lt;/button&gt;
  &lt;/toast-header&gt;
  &lt;toast-body&gt;
    Hello, world! This is a toast message.
  &lt;/toast-body&gt;
&lt;/toast&gt;
</code></pre>
                </kbd>
              </div>
            </collapse-content>
            <toast className="fade show">
              <toast-header>
                <svg class="bd-placeholder-img rounded me-2" width="20" height="20" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img">
                  <rect width="100%" height="100%" fill="#007aff"></rect>
                </svg>
                <strong class="me-auto">Bootstrap</strong>
                <small>11 mins ago</small>
                <button :dismissable="true" type="button" :class="`btn-close ${buttonClass}`" data-bs-dismiss="toast" aria-label="Close"></button>
              </toast-header>
              <toast-body>
                Hello, world! This is a toast message.
              </toast-body>
            </toast>
          </template>
        </iq-card>
        <iq-card>
          <template v-slot:headerTitle>
            <h4 class="card-title">Stacking</h4>
          </template>
          <template v-slot:headerAction>
          <collapse className="text-primary float-right"  data-bs-toggle="collapse" collapseTarget="example-collapse" ariaControls="example-collapse">
            <i class="ri-code-s-slash-line" />
          </collapse>
          </template>
          <template v-slot:body>
            <p>When you have multiple toasts, we default to vertically stacking them in a readable manner.</p>
            <collapse-content id="example-collapse" class="mb-2">
              <div class="card">
                <kbd class="bg-dark">
                  <pre class="text-white" id="notification-1">
                    <code>
&lt;div class=&quot;toast-container&quot;&gt;
  &lt;toast className=&quot;fade show mb-2&quot;&gt;
    &lt;toast-header&gt;
      &lt;svg class=&quot;bd-placeholder-img rounded me-2&quot; width=&quot;20&quot; height=&quot;20&quot; xmlns=&quot;http://www.w3.org/2000/svg&quot; preserveAspectRatio=&quot;xMidYMid slice&quot; focusable=&quot;false&quot; role=&quot;img&quot;&gt;
        &lt;rect width=&quot;100%&quot; height=&quot;100%&quot; fill=&quot;#007aff&quot;&gt;&lt;/rect&gt;
      &lt;/svg&gt;
      &lt;strong class=&quot;me-auto&quot;&gt;Bootstrap&lt;/strong&gt;
      &lt;small&gt;just now&lt;/small&gt;
      &lt;button :dismissable=&quot;true&quot; type=&quot;button&quot; :class=&quot;`btn-close ${buttonClass}`&quot; data-bs-dismiss=&quot;toast&quot; aria-label=&quot;Close&quot;&gt;&lt;/button&gt;
    &lt;/toast-header&gt;
    &lt;toast-body&gt; See? Just like this &lt;/toast-body&gt;
  &lt;/toast&gt;
  &lt;toast className=&quot;fade show&quot;&gt;
    &lt;toast-header&gt;
      &lt;svg class=&quot;bd-placeholder-img rounded me-2&quot; width=&quot;20&quot; height=&quot;20&quot; xmlns=&quot;http://www.w3.org/2000/svg&quot; preserveAspectRatio=&quot;xMidYMid slice&quot; focusable=&quot;false&quot; role=&quot;img&quot;&gt;
        &lt;rect width=&quot;100%&quot; height=&quot;100%&quot; fill=&quot;#007aff&quot;&gt;&lt;/rect&gt;
      &lt;/svg&gt;
      &lt;strong class=&quot;me-auto&quot;&gt;Bootstrap&lt;/strong&gt;
      &lt;small&gt;11 mins ago&lt;/small&gt;
      &lt;button :dismissable=&quot;true&quot; type=&quot;button&quot; :class=&quot;`btn-close ${buttonClass}`&quot; data-bs-dismiss=&quot;toast&quot; aria-label=&quot;Close&quot;&gt;&lt;/button&gt;
    &lt;/toast-header&gt;
    &lt;toast-body&gt;
    Hello, world! This is a toast message.
    &lt;/toast-body&gt;
  &lt;/toast&gt;
&lt;/div&gt;
</code> </pre>
                </kbd>
              </div>
            </collapse-content>
            <toast className="fade show mb-2">
              <toast-header>
                <svg class="bd-placeholder-img rounded me-2" width="20" height="20" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img">
                  <rect width="100%" height="100%" fill="#007aff"></rect>
                </svg>
                <strong class="me-auto">Bootstrap</strong>
                <small>just now</small>
                <button :dismissable="true" type="button" :class="`btn-close ${buttonClass}`" data-bs-dismiss="toast" aria-label="Close"></button>
              </toast-header>
              <toast-body>
                See? Just like this.
              </toast-body>
            </toast>
            <toast className="fade show">
              <toast-header>
                <svg class="bd-placeholder-img rounded me-2" width="20" height="20" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img">
                  <rect width="100%" height="100%" fill="#007aff"></rect>
                </svg>
                <strong class="me-auto">Bootstrap</strong>
                <small>2 seconds ago</small>
                <button :dismissable="true" type="button" :class="`btn-close ${buttonClass}`" data-bs-dismiss="toast" aria-label="Close"></button>
              </toast-header>
              <toast-body>
                Heads up, toasts will stack automatically
              </toast-body>
            </toast>
          </template>
        </iq-card>
       
        <iq-card>
          <template v-slot:headerTitle>
            <h4 class="card-title">Notifications horizontally and/or vertically</h4>
          </template>
          <template v-slot:headerAction>
          <collapse className="text-primary float-right"  data-bs-toggle="collapse" collapseTarget="example-collapse2" ariaControls="example-collapse2">
            <i class="ri-code-s-slash-line" />
          </collapse>
          </template>
          <template v-slot:body>
            <p>You can also get fancy with flexbox utilities to align toasts horizontally and/or vertically.</p>
            <collapse-content id="example-collapse2" className="mb-2">
              <div class="card">
                <kbd class="bg-dark">
                  <pre class="text-white" id="notification-3">
                    <code>
&lt;div class=&quot;p-3 bg-dark&quot;&gt;
  &lt;div aria-live=&quot;polite&quot; aria-atomic=&quot;true&quot; class=&quot;d-flex justify-content-center align-items-center&quot; style=&quot;min-height: 200px;&quot;&gt;
    &lt;toast className=&quot;fade show&quot;&gt;
      &lt;toast-header&gt;
        &lt;svg class=&quot;bd-placeholder-img rounded me-2&quot; width=&quot;20&quot; height=&quot;20&quot; xmlns=&quot;http://www.w3.org/2000/svg&quot; preserveAspectRatio=&quot;xMidYMid slice&quot; focusable=&quot;false&quot; role=&quot;img&quot;&gt;
          &lt;rect width=&quot;100%&quot; height=&quot;100%&quot; fill=&quot;#007aff&quot;&gt;&lt;/rect&gt;
        &lt;/svg&gt;
        &lt;strong class=&quot;me-auto&quot;&gt;Bootstrap&lt;/strong&gt;
        &lt;small&gt;11 mins ago&lt;/small&gt;
        &lt;button :dismissable=&quot;true&quot; type=&quot;button&quot; :class=&quot;`btn-close ${buttonClass}`&quot; data-bs-dismiss=&quot;toast&quot; aria-label=&quot;Close&quot;&gt;&lt;/button&gt;
      &lt;/toast-header&gt;
      &lt;toast-body&gt;
      Hello, world! This is a toast message.
      &lt;/toast-body&gt;
    &lt;/toast&gt;
  &lt;/div&gt;
&lt;/div&gt;
</code></pre>
                </kbd>
              </div>
            </collapse-content>
            <div class="p-3 bg-dark">
              <div aria-live="polite" aria-atomic="true" class="d-flex justify-content-center align-items-center" style="min-height: 200px;">
                <toast className="fade show">
                  <toast-header>
                    <svg class="bd-placeholder-img rounded me-2" width="20" height="20" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img">
                      <rect width="100%" height="100%" fill="#007aff"></rect>
                    </svg>
                    <strong class="me-auto">Bootstrap</strong>
                    <small>11 mins ago</small>
                    <button :dismissable="true" type="button" :class="`btn-close ${buttonClass}`" data-bs-dismiss="toast" aria-label="Close"></button>
                  </toast-header>
                  <toast-body>
                    Hello, world! This is a toast message.
                  </toast-body>
                </toast>
              </div>
            </div>
          </template>
        </iq-card>
      </div>
      <div class="col-lg-6">
        <iq-card>
          <template v-slot:headerTitle>
            <h4 class="card-title">Notifications</h4>
          </template>
          <template v-slot:headerAction>
          <collapse className="text-primary float-right"  data-bs-toggle="collapse" collapseTarget="example-collapse3" ariaControls="example-collapse3">
            <i class="ri-code-s-slash-line" />
          </collapse>
          </template>
          <template v-slot:body>
            <p>Toasts are as flexible as you need and have very little required markup. At a minimum, we require a single element to contain your “toasted” content and strongly encourage a dismiss button.</p>
            <collapse-content id="example-collapse3" className="mb-2">
              <div class="card">
                <kbd class="bg-dark">
                  <pre class="text-white" id="notification-4">
                    <code>
&lt;div class=&quot;p-3 bg-dark&quot;&gt;
  &lt;toast className=&quot;fade show&quot;&gt;
    &lt;toast-header&gt;
      &lt;svg class=&quot;bd-placeholder-img rounded me-2&quot; width=&quot;20&quot; height=&quot;20&quot; xmlns=&quot;http://www.w3.org/2000/svg&quot; preserveAspectRatio=&quot;xMidYMid slice&quot; focusable=&quot;false&quot; role=&quot;img&quot;&gt;
        &lt;rect width=&quot;100%&quot; height=&quot;100%&quot; fill=&quot;#007aff&quot;&gt;&lt;/rect&gt;
      &lt;/svg&gt;
      &lt;strong class=&quot;me-auto&quot;&gt;Bootstrap&lt;/strong&gt;
      &lt;small&gt;11 mins ago&lt;/small&gt;
      &lt;button :dismissable=&quot;true&quot; type=&quot;button&quot; :class=&quot;`btn-close ${buttonClass}`&quot; data-bs-dismiss=&quot;toast&quot; aria-label=&quot;Close&quot;&gt;&lt;/button&gt;
    &lt;/toast-header&gt;
    &lt;toast-body&gt;
    Hello, world! This is a toast message.
    &lt;/toast-body&gt;
  &lt;/toast&gt;
&lt;/div&gt;
</code></pre>
                </kbd>
              </div>
            </collapse-content>
              <div class="p-3 bg-dark">
                <toast className="fade show">
                  <toast-header>
                    <svg class="bd-placeholder-img rounded me-2" width="20" height="20" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img">
                      <rect width="100%" height="100%" fill="#007aff"></rect>
                    </svg>
                    <strong class="me-auto">Bootstrap</strong>
                    <small>11 mins ago</small>
                    <button :dismissable="true" type="button" :class="`btn-close ${buttonClass}`" data-bs-dismiss="toast" aria-label="Close"></button>
                  </toast-header>
                  <toast-body>
                    Hello, world! This is a toast message.
                  </toast-body>
                </toast>
              </div>
          </template>
        </iq-card>
        <iq-card>
          <template v-slot:headerTitle>
            <h4 class="card-title">Stacking Placement</h4>
          </template>
          <template v-slot:headerAction>
          <collapse className="text-primary float-right"  data-bs-toggle="collapse" collapseTarget="example-collapse4" ariaControls="example-collapse4">
            <i class="ri-code-s-slash-line" />
          </collapse>
          </template>
          <template v-slot:body>
            <p>Place toasts with custom CSS as you need them. The top right is often used for notifications, as is the top middle. If you’re only ever going to show one toast at a time, put the positioning styles right on the <code>.toast</code>.</p>
            <collapse-content id="example-collapse4" className="mb-2">
              <div class="card">
                <kbd class="bg-dark">
                  <pre class="text-white" id="notification-5">
                    <code>
&lt;div class=&quot;p-3 bg-dark&quot;&gt;
  &lt;div aria-live=&quot;polite&quot; aria-atomic=&quot;true&quot; style=&quot;position: relative; min-height: 200px;&quot;&gt;
    &lt;toast className=&quot;fade show&quot; style=&quot;position: absolute; top: 0; right: 0;&quot;&gt;
      &lt;toast-header&gt;
        &lt;svg class=&quot;bd-placeholder-img rounded me-2&quot; width=&quot;20&quot; height=&quot;20&quot; xmlns=&quot;http://www.w3.org/2000/svg&quot; preserveAspectRatio=&quot;xMidYMid slice&quot; focusable=&quot;false&quot; role=&quot;img&quot;&gt;
          &lt;rect width=&quot;100%&quot; height=&quot;100%&quot; fill=&quot;#007aff&quot;&gt;&lt;/rect&gt;
        &lt;/svg&gt;
        &lt;strong class=&quot;me-auto&quot;&gt;Bootstrap&lt;/strong&gt;
        &lt;small&gt;11 mins ago&lt;/small&gt;
        &lt;button :dismissable=&quot;true&quot; type=&quot;button&quot; :class=&quot;`btn-close ${buttonClass}`&quot; data-bs-dismiss=&quot;toast&quot; aria-label=&quot;Close&quot;&gt;&lt;/button&gt;
      &lt;/toast-header&gt;
      &lt;toast-body&gt;
      Hello, world! This is a toast message.
      &lt;/toast-body&gt;
    &lt;/toast&gt;
  &lt;/div&gt;
&lt;/div&gt;
&lt;p class=&quot;mt-3&quot;&gt;For systems that generate more notifications, consider using a wrapping element so they can easily stack.&lt;/p&gt;
&lt;div class=&quot;bg-dark p-3 mt-3&quot;&gt;
  &lt;div aria-live=&quot;polite&quot; aria-atomic=&quot;true&quot; style=&quot;position: relative; min-height: 200px;&quot;&gt;
    &lt;div style=&quot;position: absolute; top: 0; right: 0;&quot;&gt;
      &lt;toast className=&quot;fade show&quot;&gt;
        &lt;toast-header&gt;
          &lt;svg class=&quot;bd-placeholder-img rounded me-2&quot; width=&quot;20&quot; height=&quot;20&quot; xmlns=&quot;http://www.w3.org/2000/svg&quot; preserveAspectRatio=&quot;xMidYMid slice&quot; focusable=&quot;false&quot; role=&quot;img&quot;&gt;
            &lt;rect width=&quot;100%&quot; height=&quot;100%&quot; fill=&quot;#007aff&quot;&gt;&lt;/rect&gt;
          &lt;/svg&gt;
          &lt;strong class=&quot;me-auto&quot;&gt;Bootstrap&lt;/strong&gt;
          &lt;small&gt;11 mins ago&lt;/small&gt;
          &lt;button :dismissable=&quot;true&quot; type=&quot;button&quot; :class=&quot;`btn-close ${buttonClass}`&quot; data-bs-dismiss=&quot;toast&quot; aria-label=&quot;Close&quot;&gt;&lt;/button&gt;
        &lt;/toast-header&gt;
        &lt;toast-body&gt;
        Hello, world! This is a toast message.
        &lt;/toast-body&gt; &lt;/toast&gt;
      &lt;toast className=&quot;fade show&quot;&gt;
        &lt;toast-header&gt;
          &lt;svg class=&quot;bd-placeholder-img rounded me-2&quot; width=&quot;20&quot; height=&quot;20&quot; xmlns=&quot;http://www.w3.org/2000/svg&quot; preserveAspectRatio=&quot;xMidYMid slice&quot; focusable=&quot;false&quot; role=&quot;img&quot;&gt;
            &lt;rect width=&quot;100%&quot; height=&quot;100%&quot; fill=&quot;#007aff&quot;&gt;&lt;/rect&gt;
          &lt;/svg&gt;
          &lt;strong class=&quot;me-auto&quot;&gt;Bootstrap&lt;/strong&gt;
          &lt;small&gt;11 mins ago&lt;/small&gt;
          &lt;button :dismissable=&quot;true&quot; type=&quot;button&quot; :class=&quot;`btn-close ${buttonClass}`&quot; data-bs-dismiss=&quot;toast&quot; aria-label=&quot;Close&quot;&gt;&lt;/button&gt;
        &lt;/toast-header&gt;
        &lt;toast-body&gt;
        Hello, world! This is a toast message.
        &lt;/toast-body&gt;
      &lt;/toast&gt;
    &lt;/div&gt;
  &lt;/div&gt;
&lt;/div&gt;

</code></pre>
                </kbd>
              </div>
            </collapse-content>
            <div class="p-3 bg-dark">
              <div aria-live="polite" aria-atomic="true" style="position: relative; min-height: 200px;">
                <toast className="fade show" style="position: absolute; top: 0; right: 0;">
                  <toast-header>
                    <svg class="bd-placeholder-img rounded me-2" width="20" height="20" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img">
                      <rect width="100%" height="100%" fill="#007aff"></rect>
                    </svg>
                    <strong class="me-auto">Bootstrap</strong>
                    <small>11 mins ago</small>
                    <button :dismissable="true" type="button" :class="`btn-close ${buttonClass}`" data-bs-dismiss="toast" aria-label="Close"></button>
                  </toast-header>
                  <toast-body>
                    Hello, world! This is a toast message.
                  </toast-body>
                </toast>
              </div>
            </div>
            <p class="mt-3">For systems that generate more notifications, consider using a wrapping element so they can easily stack.</p>
                <div class="bg-dark p-3 mt-3">
                  <div aria-live="polite" aria-atomic="true" style="position: relative; min-height: 200px;">
                    <div style="position: absolute; top: 0; right: 0;">
                      <toast className="fade show">
                        <toast-header>
                          <svg class="bd-placeholder-img rounded me-2" width="20" height="20" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img">
                            <rect width="100%" height="100%" fill="#007aff"></rect>
                          </svg>
                          <strong class="me-auto">Bootstrap</strong>
                          <small>11 mins ago</small>
                          <button :dismissable="true" type="button" :class="`btn-close ${buttonClass}`" data-bs-dismiss="toast" aria-label="Close"></button>
                        </toast-header>
                        <toast-body>
                          Hello, world! This is a toast message.
                        </toast-body>
                      </toast>
                      <toast className="fade show">
                        <toast-header>
                          <svg class="bd-placeholder-img rounded me-2" width="20" height="20" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img">
                            <rect width="100%" height="100%" fill="#007aff"></rect>
                          </svg>
                          <strong class="me-auto">Bootstrap</strong>
                          <small>11 mins ago</small>
                          <button :dismissable="true" type="button" :class="`btn-close ${buttonClass}`" data-bs-dismiss="toast" aria-label="Close"></button>
                        </toast-header>
                        <toast-body>
                          Hello, world! This is a toast message.
                        </toast-body>
                      </toast>
                    </div>
                  </div>
                </div>
          </template>
        </iq-card>
      </div>
      <div class="col-sm-12">
        <iq-card>
          <template v-slot:headerTitle>
            <h4 class="card-title">Notifications</h4>
          </template>
          <template v-slot:headerAction>
          <collapse className="text-primary float-right"  data-bs-toggle="collapse" collapseTarget="example-collapse5" ariaControls="example-collapse5">
            <i class="ri-code-s-slash-line" />
          </collapse>
          </template>
          <template v-slot:body>
            <p>Toasts are as flexible as you need and have very little required markup. At a minimum, we require a single element to contain your “toasted” content and strongly encourage a dismiss button.</p>
            <collapse-content id="example-collapse5" className="mb-2">
              <div class="card">
                <kbd class="bg-dark">
                  <pre class="text-white" id="notification-6">
                    <code>
&lt;div class=&quot;toast-container&quot;&gt;
  &lt;toast className=&quot;fade show bg-primary text-white border-0&quot;&gt;
    &lt;toast-header headerClass=&quot;bg-primary text-white&quot;&gt;
      &lt;svg class=&quot;bd-placeholder-img rounded me-2 &quot; width=&quot;20&quot; height=&quot;20&quot; xmlns=&quot;http://www.w3.org/2000/svg&quot; preserveAspectRatio=&quot;xMidYMid slice&quot; focusable=&quot;false&quot; role=&quot;img&quot;&gt;
        &lt;rect width=&quot;100%&quot; height=&quot;100%&quot; fill=&quot;#fff&quot;&gt;&lt;/rect&gt;
      &lt;/svg&gt;
      &lt;strong class=&quot;me-auto text-white&quot;&gt;Bootstrap&lt;/strong&gt;
      &lt;small&gt;11 mins ago&lt;/small&gt;
      &lt;button :dismissable=&quot;true&quot; type=&quot;button&quot; :class=&quot;`btn-close ${buttonClass}`&quot; data-bs-dismiss=&quot;toast&quot; aria-label=&quot;Close&quot;&gt;&lt;/button&gt;
    &lt;/toast-header&gt;
    &lt;toast-body&gt;
    Hello, world! This is a toast message.
    &lt;/toast-body&gt; &lt;/toast&gt;
  &lt;toast className=&quot;fade show bg-success text-white border-0&quot;&gt;
    &lt;toast-header headerClass=&quot;bg-success text-white&quot;&gt;
      &lt;svg class=&quot;bd-placeholder-img rounded me-2&quot; width=&quot;20&quot; height=&quot;20&quot; xmlns=&quot;http://www.w3.org/2000/svg&quot; preserveAspectRatio=&quot;xMidYMid slice&quot; focusable=&quot;false&quot; role=&quot;img&quot;&gt;
        &lt;rect width=&quot;100%&quot; height=&quot;100%&quot; fill=&quot;#fff&quot;&gt;&lt;/rect&gt;
      &lt;/svg&gt;
      &lt;strong class=&quot;me-auto text-white&quot;&gt;Bootstrap&lt;/strong&gt;
      &lt;small&gt;11 mins ago&lt;/small&gt;
      &lt;button :dismissable=&quot;true&quot; type=&quot;button&quot; :class=&quot;`btn-close ${buttonClass}`&quot; data-bs-dismiss=&quot;toast&quot; aria-label=&quot;Close&quot;&gt;&lt;/button&gt;
    &lt;/toast-header&gt;
    &lt;toast-body&gt;
    Hello, world! This is a toast message.
    &lt;/toast-body&gt;
  &lt;/toast&gt;
&lt;/div&gt;
</code></pre>
                </kbd>
              </div>
            </collapse-content>
            <div class="toast-container">
              <toast className="fade show bg-primary text-white border-0">
                <toast-header headerClass="bg-primary text-white">
                  <svg class="bd-placeholder-img rounded me-2 " width="20" height="20" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img">
                    <rect width="100%" height="100%" fill="#fff"></rect>
                  </svg>
                  <strong class="me-auto text-white">Bootstrap</strong>
                  <small>11 mins ago</small>
                  <button :dismissable="true" type="button" :class="`btn-close ${buttonClass}`" data-bs-dismiss="toast" aria-label="Close"></button>
                </toast-header>
                <toast-body>
                  Hello, world! This is a toast message.
                </toast-body>
              </toast>
              <toast className="fade show bg-success text-white border-0">
                <toast-header headerClass="bg-success text-white">
                  <svg class="bd-placeholder-img rounded me-2" width="20" height="20" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img">
                    <rect width="100%" height="100%" fill="#fff"></rect>
                  </svg>
                  <strong class="me-auto text-white">Bootstrap</strong>
                  <small>11 mins ago</small>
                  <button :dismissable="true" type="button" :class="`btn-close ${buttonClass}`" data-bs-dismiss="toast" aria-label="Close"></button>
                </toast-header>
                <toast-body>
                  Hello, world! This is a toast message.
                </toast-body>
              </toast>
            </div>
          </template>
        </iq-card>
      </div>
    </div>
</template>
<script>
// import { socialvue } from '../../config/pluginInit'
export default {
  name: 'UiNotifications',
  mounted () {
    // socialvue.index()
  }
}
</script>
