<template>
    <div class="row">
      <div class="col-sm-12">
          <div class="card position-relative inner-page-bg bg-primary" style="height: 150px;">
            <div class="inner-page-title">
                <h3 class="text-white">Button Page</h3>
                <p class="text-white">lorem ipsum</p>
            </div>
          </div>
      </div>
      <div class="col-lg-6 col-sm-12">
        <iq-card>
          <template v-slot:headerTitle>
            <h4 class="card-title">Default Buttons</h4>
          </template>
          <template v-slot:headerAction>
          <collapse className="text-primary float-right"  data-bs-toggle="collapse" collapseTarget="example-collapse" ariaControls="example-collapse">
            <i class="ri-code-s-slash-line" />
          </collapse>
          </template>
          <template v-slot:body>
            <p class="mb-4">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever</p>
            <collapse-content id="example-collapse" className="mb-2">
              <div class="card">
                <kbd class="bg-dark">
                  <pre class="text-white" id="default-buttons">
                    <code>
&lt;button type=&quot;button&quot; class=&quot;btn btn-primary mb-3 me-1&quot;&gt;Primary&lt;/button&gt;
&lt;button type=&quot;button&quot; class=&quot;btn btn-secondary mb-3 me-1&quot;&gt;Secondary&lt;/button&gt;
&lt;button type=&quot;button&quot; class=&quot;btn btn-success mb-3 me-1&quot;&gt;Success&lt;/button&gt;
&lt;button type=&quot;button&quot; class=&quot;btn btn-danger mb-3 me-1&quot;&gt;Danger&lt;/button&gt;
&lt;button type=&quot;button&quot; class=&quot;btn btn-warning mb-3 me-1&quot;&gt;Warning&lt;/button&gt;
&lt;button type=&quot;button&quot; class=&quot;btn btn-info mb-3 me-1&quot;&gt;Info&lt;/button&gt;
&lt;button type=&quot;button&quot; class=&quot;btn btn-light mb-3 me-1&quot;&gt;Light&lt;/button&gt;
&lt;button type=&quot;button&quot; class=&quot;btn btn-dark mb-3 me-1&quot;&gt;Dark&lt;/button&gt;
&lt;button type=&quot;button&quot; class=&quot;btn btn-link mb-3 me-1&quot;&gt;Link&lt;/button&gt;
</code></pre>
                </kbd>
              </div>
            </collapse-content>
            <button type="button" class="btn btn-primary mb-3 me-1">Primary</button>
            <button type="button" class="btn btn-secondary mb-3 me-1">Secondary</button>
            <button type="button" class="btn btn-success mb-3 me-1">Success</button>
            <button type="button" class="btn btn-danger mb-3 me-1">Danger</button>
            <button type="button" class="btn btn-warning mb-3 me-1">Warning</button>
            <button type="button" class="btn btn-info mb-3 me-1">Info</button>
            <button type="button" class="btn btn-light mb-3 me-1">Light</button>
            <button type="button" class="btn btn-dark mb-3 me-1">Dark</button>
            <button type="button" class="btn btn-link mb-3 me-1">Link</button>
          </template>
        </iq-card>
      </div>
      <div class="col-lg-6 col-sm-12">
        <iq-card>
          <template v-slot:headerTitle>
            <h4 class="card-title">Default Buttons Rounded Shape</h4>
          </template>
          <template v-slot:headerAction>
          <collapse className="text-primary float-right"  data-bs-toggle="collapse" collapseTarget="example-collapse1" ariaControls="example-collapse1">
            <i class="ri-code-s-slash-line" />
          </collapse>
          </template>
          <template v-slot:body>
            <p class="mb-4">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever</p>
            <collapse-content id="example-collapse1" className="mb-2">
              <div class="card">
                <kbd class="bg-dark">
                  <pre class="text-white" id="default-buttons-round-shape">
                    <code>
&lt;button type=&quot;button&quot; class=&quot;btn btn-primary rounded-pill mb-3 me-1&quot;&gt;Primary&lt;/button&gt;
&lt;button type=&quot;button&quot; class=&quot;btn btn-secondary rounded-pill mb-3 me-1&quot;&gt;Secondary&lt;/button&gt;
&lt;button type=&quot;button&quot; class=&quot;btn btn-success rounded-pill mb-3 me-1&quot;&gt;Success&lt;/button&gt;
&lt;button type=&quot;button&quot; class=&quot;btn btn-danger rounded-pill mb-3 me-1&quot;&gt;Danger&lt;/button&gt;
&lt;button type=&quot;button&quot; class=&quot;btn btn-warning rounded-pill mb-3 me-1&quot;&gt;Warning&lt;/button&gt;
&lt;button type=&quot;button&quot; class=&quot;btn btn-info rounded-pill mb-3 me-1&quot;&gt;Info&lt;/button&gt;
&lt;button type=&quot;button&quot; class=&quot;btn btn-light rounded-pill mb-3 me-1&quot;&gt;Light&lt;/button&gt;
&lt;button type=&quot;button&quot; class=&quot;btn btn-dark rounded-pill mb-3 me-1&quot;&gt;Dark&lt;/button&gt;
&lt;button type=&quot;button&quot; class=&quot;btn btn-link rounded-pill mb-3 me-1&quot;&gt;Link&lt;/button&gt;
</code></pre>
                </kbd>
              </div>
            </collapse-content>
            <button type="button" class="btn btn-primary rounded-pill mb-3 me-1">Primary</button>
            <button type="button" class="btn btn-secondary rounded-pill mb-3 me-1">Secondary</button>
            <button type="button" class="btn btn-success rounded-pill mb-3 me-1">Success</button>
            <button type="button" class="btn btn-danger rounded-pill mb-3 me-1">Danger</button>
            <button type="button" class="btn btn-warning rounded-pill mb-3 me-1">Warning</button>
            <button type="button" class="btn btn-info rounded-pill mb-3 me-1">Info</button>
            <button type="button" class="btn btn-light rounded-pill mb-3 me-1">Light</button>
            <button type="button" class="btn btn-dark rounded-pill mb-3 me-1">Dark</button>
            <button type="button" class="btn btn-link rounded-pill mb-3 me-1">Link</button>
          </template>
        </iq-card>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-6 col-sm-12">
        <iq-card>
          <template v-slot:headerTitle>
            <h4 class="card-title">Outline Buttons</h4>
          </template>
          <template v-slot:headerAction>
          <collapse className="text-primary float-right"  data-bs-toggle="collapse" collapseTarget="example-collapse2" ariaControls="example-collapse2">
            <i class="ri-code-s-slash-line" />
          </collapse>
          </template>
          <template v-slot:body>
            <p class="mb-4">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever</p>
            <collapse-content id="example-collapse2" className="mb-2">
              <div class="card">
                <kbd class="bg-dark">
                  <pre class="text-white" id="outline-buttons">
                    <code>
&lt;button type=&quot;button&quot; class=&quot;btn btn-outline-primary mb-3 me-1&quot;&gt;Primary&lt;/button&gt;
&lt;button type=&quot;button&quot; class=&quot;btn btn-outline-secondary mb-3 me-1&quot;&gt;Secondary&lt;/button&gt;
&lt;button type=&quot;button&quot; class=&quot;btn btn-outline-success mb-3 me-1&quot;&gt;Success&lt;/button&gt;
&lt;button type=&quot;button&quot; class=&quot;btn btn-outline-danger mb-3 me-1&quot;&gt;Danger&lt;/button&gt;
&lt;button type=&quot;button&quot; class=&quot;btn btn-outline-warning mb-3 me-1&quot;&gt;Warning&lt;/button&gt;
&lt;button type=&quot;button&quot; class=&quot;btn btn-outline-info mb-3 me-1&quot;&gt;Info&lt;/button&gt;
&lt;button type=&quot;button&quot; class=&quot;btn btn-outline-dark mb-3 me-1&quot;&gt;Dark&lt;/button&gt;
&lt;button type=&quot;button&quot; class=&quot;btn btn-outline-link mb-3 me-1&quot;&gt;Link&lt;/button&gt;
</code></pre>
                </kbd>
              </div>
            </collapse-content>
            <button type="button" class="btn btn-outline-primary mb-3 me-1">Primary</button>
            <button type="button" class="btn btn-outline-secondary mb-3 me-1">Secondary</button>
            <button type="button" class="btn btn-outline-success mb-3 me-1">Success</button>
            <button type="button" class="btn btn-outline-danger mb-3 me-1">Danger</button>
            <button type="button" class="btn btn-outline-warning mb-3 me-1">Warning</button>
            <button type="button" class="btn btn-outline-info mb-3 me-1">Info</button>
            <button type="button" class="btn btn-outline-dark mb-3 me-1">Dark</button>
            <button type="button" class="btn btn-outline-link mb-3 me-1">Link</button>
          </template>
        </iq-card>
      </div>
      <div class="col-lg-6 col-sm-12">
        <iq-card>
          <template v-slot:headerTitle>
            <h4 class="card-title">Rounded Outline Buttons</h4>
          </template>
          <template v-slot:headerAction>
          <collapse className="text-primary float-right"  data-bs-toggle="collapse" collapseTarget="example-collapse3" ariaControls="example-collapse3">
            <i class="ri-code-s-slash-line" />
          </collapse>
          </template>
          <template v-slot:body>
            <p class="mb-4">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever</p>
            <collapse-content id="example-collapse3" className="mb-2">
              <div class="card">
                <kbd class="bg-dark">
                  <pre class="text-white" id="round-outlines-buttons">
                    <code>
&lt;button type=&quot;button&quot; class=&quot;btn btn-outline-primary rounded-pill mb-3 me-1&quot;&gt;Primary&lt;/button&gt;
&lt;button type=&quot;button&quot; class=&quot;btn btn-outline-secondary rounded-pill mb-3 me-1&quot;&gt;Secondary&lt;/button&gt;
&lt;button type=&quot;button&quot; class=&quot;btn btn-outline-success rounded-pill mb-3 me-1&quot;&gt;Success&lt;/button&gt;
&lt;button type=&quot;button&quot; class=&quot;btn btn-outline-danger rounded-pill mb-3 me-1&quot;&gt;Danger&lt;/button&gt;
&lt;button type=&quot;button&quot; class=&quot;btn btn-outline-warning rounded-pill mb-3 me-1&quot;&gt;Warning&lt;/button&gt;
&lt;button type=&quot;button&quot; class=&quot;btn btn-outline-info rounded-pill mb-3 me-1&quot;&gt;Info&lt;/button&gt;
&lt;button type=&quot;button&quot; class=&quot;btn btn-outline-dark rounded-pill mb-3 me-1&quot;&gt;Dark&lt;/button&gt;
&lt;button type=&quot;button&quot; class=&quot;btn btn-outline-link rounded-pill mb-3 me-1&quot;&gt;Link&lt;/button&gt;
</code></pre>
                </kbd>
              </div>
            </collapse-content>
            <button type="button" class="btn btn-outline-primary rounded-pill mb-3 me-1">Primary</button>
            <button type="button" class="btn btn-outline-secondary rounded-pill mb-3 me-1">Secondary</button>
            <button type="button" class="btn btn-outline-success rounded-pill mb-3 me-1">Success</button>
            <button type="button" class="btn btn-outline-danger rounded-pill mb-3 me-1">Danger</button>
            <button type="button" class="btn btn-outline-warning rounded-pill mb-3 me-1">Warning</button>
            <button type="button" class="btn btn-outline-info rounded-pill mb-3 me-1">Info</button>
            <button type="button" class="btn btn-outline-dark rounded-pill mb-3 me-1">Dark</button>
            <button type="button" class="btn btn-outline-link rounded-pill mb-3 me-1">Link</button>
          </template>
        </iq-card>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-6 col-sm-12">
        <iq-card>
          <template v-slot:headerTitle>
            <h4 class="card-title">Default Buttons</h4>
          </template>
          <template v-slot:headerAction>
          <collapse className="text-primary float-right"  data-bs-toggle="collapse" collapseTarget="example-collapse4" ariaControls="example-collapse4">
            <i class="ri-code-s-slash-line" />
          </collapse>
          </template>
          <template v-slot:body>
            <p class="mb-4">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever</p>
            <collapse-content id="example-collapse4" className="mb-2">
              <div class="card">
                <kbd class="bg-dark">
                  <pre class="text-white" id="default-buttons-icon">
                    <code>
&lt;button type=&quot;button&quot; class=&quot;btn btn-primary mb-3 me-1&quot;&gt;&lt;i class=&quot;ri-bill-fill me-1&quot;&gt;&lt;/i&gt;Primary&lt;/button&gt;
&lt;button type=&quot;button&quot; class=&quot;btn btn-secondary mb-3 me-1&quot;&gt;&lt;i class=&quot;ri-heart-fill me-1&quot;&gt;&lt;/i&gt;Secondary&lt;/button&gt;
&lt;button type=&quot;button&quot; class=&quot;btn btn-success mb-3 me-1&quot;&gt;&lt;i class=&quot;ri-bill-fill me-1&quot;&gt;&lt;/i&gt;Success&lt;/button&gt;
&lt;button type=&quot;button&quot; class=&quot;btn btn-danger mb-3 me-1&quot;&gt;&lt;i class=&quot;ri-heart-fill me-1&quot;&gt;&lt;/i&gt;Danger&lt;/button&gt;
&lt;button type=&quot;button&quot; class=&quot;btn btn-warning mb-3 me-1&quot;&gt;&lt;i class=&quot;ri-bill-fill me-1&quot;&gt;&lt;/i&gt;Warning&lt;/button&gt;
&lt;button type=&quot;button&quot; class=&quot;btn btn-info mb-3 me-1&quot;&gt;&lt;i class=&quot;ri-heart-fill me-1&quot;&gt;&lt;/i&gt;Info&lt;/button&gt;
&lt;button type=&quot;button&quot; class=&quot;btn btn-light mb-3 me-1&quot;&gt;&lt;i class=&quot;ri-bill-fill me-1&quot;&gt;&lt;/i&gt;Light&lt;/button&gt;
&lt;button type=&quot;button&quot; class=&quot;btn btn-dark mb-3 me-1&quot;&gt;&lt;i class=&quot;ri-heart-fill me-1&quot;&gt;&lt;/i&gt;Dark&lt;/button&gt;
&lt;button type=&quot;button&quot; class=&quot;btn btn-link mb-3 me-1&quot;&gt;&lt;i class=&quot;ri-bill-fill me-1&quot;&gt;&lt;/i&gt;Link&lt;/button&gt;
</code></pre>
                </kbd>
              </div>
            </collapse-content>
            <button type="button" class="btn btn-primary mb-3 me-1"><i class="ri-bill-fill me-1"></i>Primary</button>
            <button type="button" class="btn btn-secondary mb-3 me-1"><i class="ri-heart-fill me-1"></i>Secondary</button>
            <button type="button" class="btn btn-success mb-3 me-1"><i class="ri-bill-fill me-1"></i>Success</button>
            <button type="button" class="btn btn-danger mb-3 me-1"><i class="ri-heart-fill me-1"></i>Danger</button>
            <button type="button" class="btn btn-warning mb-3 me-1"><i class="ri-bill-fill me-1"></i>Warning</button>
            <button type="button" class="btn btn-info mb-3 me-1"><i class="ri-heart-fill me-1"></i>Info</button>
            <button type="button" class="btn btn-light mb-3 me-1"><i class="ri-bill-fill me-1"></i>Light</button>
            <button type="button" class="btn btn-dark mb-3 me-1"><i class="ri-heart-fill me-1"></i>Dark</button>
            <button type="button" class="btn btn-link mb-3 me-1"><i class="ri-bill-fill me-1"></i>Link</button>
          </template>
        </iq-card>
      </div>
      <div class="col-lg-6 col-sm-12">
        <iq-card>
          <template v-slot:headerTitle>
            <h4 class="card-title">Default Buttons Rounded Shape</h4>
          </template>
          <template v-slot:headerAction>
          <collapse className="text-primary float-right"  data-bs-toggle="collapse" collapseTarget="example-collapse5" ariaControls="example-collapse5">
            <i class="ri-code-s-slash-line" />
          </collapse>
          </template>
          <template v-slot:body>
            <p class="mb-4">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever</p>
            <collapse-content id="example-collapse5" className="mb-2">
              <div class="card">
                <kbd class="bg-dark">
                  <pre class="text-white" id="default-buttons-round-shape-icon">
                    <code>
&lt;button type=&quot;button&quot; class=&quot;btn btn-primary rounded-pill mb-3 me-1&quot;&gt;&lt;i class=&quot;ri-bill-fill me-1&quot;&gt;&lt;/i&gt;Primary&lt;/button&gt;
&lt;button type=&quot;button&quot; class=&quot;btn btn-secondary rounded-pill mb-3 me-1&quot;&gt;&lt;i class=&quot;ri-heart-fill me-1&quot;&gt;&lt;/i&gt;Secondary&lt;/button&gt;
&lt;button type=&quot;button&quot; class=&quot;btn btn-success rounded-pill mb-3 me-1&quot;&gt;&lt;i class=&quot;ri-bill-fill me-1&quot;&gt;&lt;/i&gt;Success&lt;/button&gt;
&lt;button type=&quot;button&quot; class=&quot;btn btn-danger rounded-pill mb-3 me-1&quot;&gt;&lt;i class=&quot;ri-heart-fill me-1&quot;&gt;&lt;/i&gt;Danger&lt;/button&gt;
&lt;button type=&quot;button&quot; class=&quot;btn btn-warning rounded-pill mb-3 me-1&quot;&gt;&lt;i class=&quot;ri-bill-fill me-1&quot;&gt;&lt;/i&gt;Warning&lt;/button&gt;
&lt;button type=&quot;button&quot; class=&quot;btn btn-info rounded-pill mb-3 me-1&quot;&gt;&lt;i class=&quot;ri-heart-fill me-1&quot;&gt;&lt;/i&gt;Info&lt;/button&gt;
&lt;button type=&quot;button&quot; class=&quot;btn btn-light rounded-pill mb-3 me-1&quot;&gt;&lt;i class=&quot;ri-bill-fill me-1&quot;&gt;&lt;/i&gt;Light&lt;/button&gt;
&lt;button type=&quot;button&quot; class=&quot;btn btn-dark rounded-pill mb-3 me-1&quot;&gt;&lt;i class=&quot;ri-heart-fill me-1&quot;&gt;&lt;/i&gt;Dark&lt;/button&gt;
&lt;button type=&quot;button&quot; class=&quot;btn btn-link rounded-pill mb-3 me-1&quot;&gt;&lt;i class=&quot;ri-bill-fill me-1&quot;&gt;&lt;/i&gt;Link&lt;/button&gt;
</code></pre>
                </kbd>
              </div>
            </collapse-content>
            <button type="button" class="btn btn-primary rounded-pill mb-3 me-1"><i class="ri-bill-fill me-1"></i>Primary</button>
            <button type="button" class="btn btn-secondary rounded-pill mb-3 me-1"><i class="ri-heart-fill me-1"></i>Secondary</button>
            <button type="button" class="btn btn-success rounded-pill mb-3 me-1"><i class="ri-bill-fill me-1"></i>Success</button>
            <button type="button" class="btn btn-danger rounded-pill mb-3 me-1"><i class="ri-heart-fill me-1"></i>Danger</button>
            <button type="button" class="btn btn-warning rounded-pill mb-3 me-1"><i class="ri-bill-fill me-1"></i>Warning</button>
            <button type="button" class="btn btn-info rounded-pill mb-3 me-1"><i class="ri-heart-fill me-1"></i>Info</button>
            <button type="button" class="btn btn-light rounded-pill mb-3 me-1"><i class="ri-bill-fill me-1"></i>Light</button>
            <button type="button" class="btn btn-dark rounded-pill mb-3 me-1"><i class="ri-heart-fill me-1"></i>Dark</button>
            <button type="button" class="btn btn-link rounded-pill mb-3 me-1"><i class="ri-bill-fill me-1"></i>Link</button>
          </template>
        </iq-card>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-6 col-sm-12">
        <iq-card>
          <template v-slot:headerTitle>
            <h4 class="card-title">Outline Buttons</h4>
          </template>
          <template v-slot:headerAction>
          <collapse className="text-primary float-right"  data-bs-toggle="collapse" collapseTarget="example-collapse6" ariaControls="example-collapse6">
            <i class="ri-code-s-slash-line" />
          </collapse>
          </template>
          <template v-slot:body>
            <p class="mb-4">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever</p>
            <collapse-content id="example-collapse6" className="mb-2">
              <div class="card">
                <kbd class="bg-dark">
                  <pre class="text-white" id="outline-buttons-icons">
                    <code>
&lt;button type=&quot;button&quot; class=&quot;btn btn-outline-primary mb-3 me-1&quot;&gt;&lt;i class=&quot;ri-bill-fill me-1&quot;&gt;&lt;/i&gt;Primary&lt;/button&gt;
&lt;button type=&quot;button&quot; class=&quot;btn btn-outline-secondary mb-3 me-1&quot;&gt;&lt;i class=&quot;ri-heart-fill me-1&quot;&gt;&lt;/i&gt;Secondary&lt;/button&gt;
&lt;button type=&quot;button&quot; class=&quot;btn btn-outline-success mb-3 me-1&quot;&gt;&lt;i class=&quot;ri-bill-fill me-1&quot;&gt;&lt;/i&gt;Success&lt;/button&gt;
&lt;button type=&quot;button&quot; class=&quot;btn btn-outline-danger mb-3 me-1&quot;&gt;&lt;i class=&quot;ri-heart-fill me-1&quot;&gt;&lt;/i&gt;Danger&lt;/button&gt;
&lt;button type=&quot;button&quot; class=&quot;btn btn-outline-warning mb-3 me-1&quot;&gt;&lt;i class=&quot;ri-bill-fill me-1&quot;&gt;&lt;/i&gt;Warning&lt;/button&gt;
&lt;button type=&quot;button&quot; class=&quot;btn btn-outline-info mb-3 me-1&quot;&gt;&lt;i class=&quot;ri-heart-fill me-1&quot;&gt;&lt;/i&gt;Info&lt;/button&gt;
&lt;button type=&quot;button&quot; class=&quot;btn btn-outline-dark mb-3 me-1&quot;&gt;&lt;i class=&quot;ri-heart-fill me-1&quot;&gt;&lt;/i&gt;Dark&lt;/button&gt;
&lt;button type=&quot;button&quot; class=&quot;btn btn-outline-link mb-3 me-1&quot;&gt;&lt;i class=&quot;ri-bill-fill me-1&quot;&gt;&lt;/i&gt;Link&lt;/button&gt;
</code></pre>
                </kbd>
              </div>
            </collapse-content>
            <button type="button" class="btn btn-outline-primary mb-3 me-1"><i class="ri-bill-fill me-1"></i>Primary</button>
            <button type="button" class="btn btn-outline-secondary mb-3 me-1"><i class="ri-heart-fill me-1"></i>Secondary</button>
            <button type="button" class="btn btn-outline-success mb-3 me-1"><i class="ri-bill-fill me-1"></i>Success</button>
            <button type="button" class="btn btn-outline-danger mb-3 me-1"><i class="ri-heart-fill me-1"></i>Danger</button>
            <button type="button" class="btn btn-outline-warning mb-3 me-1"><i class="ri-bill-fill me-1"></i>Warning</button>
            <button type="button" class="btn btn-outline-info mb-3 me-1"><i class="ri-heart-fill me-1"></i>Info</button>
            <button type="button" class="btn btn-outline-dark mb-3 me-1"><i class="ri-heart-fill me-1"></i>Dark</button>
            <button type="button" class="btn btn-outline-link mb-3 me-1"><i class="ri-bill-fill me-1"></i>Link</button>
          </template>
        </iq-card>
      </div>
      <div class="col-lg-6 col-sm-12">
        <iq-card>
          <template v-slot:headerTitle>
            <h4 class="card-title">Rounded Outline Buttons</h4>
          </template>
          <template v-slot:headerAction>
          <collapse className="text-primary float-right"  data-bs-toggle="collapse" collapseTarget="example-collapse7" ariaControls="example-collapse7">
            <i class="ri-code-s-slash-line" />
          </collapse>
          </template>
          <template v-slot:body>
            <p class="mb-4">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever</p>
            <collapse-content id="example-collapse7" className="mb-2">
              <div class="card">
                <kbd class="bg-dark">
                  <pre class="text-white" id="round-outlines-buttons-icons">
                    <code>
&lt;button type=&quot;button&quot; class=&quot;btn btn-outline-primary rounded-pill mb-3 me-1&quot;&gt;&lt;i class=&quot;ri-bill-fill me-1&quot;&gt;&lt;/i&gt;Primary&lt;/button&gt;
&lt;button type=&quot;button&quot; class=&quot;btn btn-outline-secondary rounded-pill mb-3 me-1&quot;&gt;&lt;i class=&quot;ri-heart-fill me-1&quot;&gt;&lt;/i&gt;Secondary&lt;/button&gt;
&lt;button type=&quot;button&quot; class=&quot;btn btn-outline-success rounded-pill mb-3 me-1&quot;&gt;&lt;i class=&quot;ri-bill-fill me-1&quot;&gt;&lt;/i&gt;Success&lt;/button&gt;
&lt;button type=&quot;button&quot; class=&quot;btn btn-outline-danger rounded-pill mb-3 me-1&quot;&gt;&lt;i class=&quot;ri-heart-fill me-1&quot;&gt;&lt;/i&gt;Danger&lt;/button&gt;
&lt;button type=&quot;button&quot; class=&quot;btn btn-outline-warning rounded-pill mb-3 me-1&quot;&gt;&lt;i class=&quot;ri-bill-fill me-1&quot;&gt;&lt;/i&gt;Warning&lt;/button&gt;
&lt;button type=&quot;button&quot; class=&quot;btn btn-outline-info rounded-pill mb-3 me-1&quot;&gt;&lt;i class=&quot;ri-heart-fill me-1&quot;&gt;&lt;/i&gt;Info&lt;/button&gt;
&lt;button type=&quot;button&quot; class=&quot;btn btn-outline-dark rounded-pill mb-3 me-1&quot;&gt;&lt;i class=&quot;ri-heart-fill me-1&quot;&gt;&lt;/i&gt;Dark&lt;/button&gt;
&lt;button type=&quot;button&quot; class=&quot;btn btn-outline-link rounded-pill mb-3 me-1&quot;&gt;&lt;i class=&quot;ri-bill-fill me-1&quot;&gt;&lt;/i&gt;Link&lt;/button&gt;
</code></pre>
                </kbd>
              </div>
            </collapse-content>
            <button type="button" class="btn btn-outline-primary rounded-pill mb-3 me-1"><i class="ri-bill-fill me-1"></i>Primary</button>
            <button type="button" class="btn btn-outline-secondary rounded-pill mb-3 me-1"><i class="ri-heart-fill me-1"></i>Secondary</button>
            <button type="button" class="btn btn-outline-success rounded-pill mb-3 me-1"><i class="ri-bill-fill me-1"></i>Success</button>
            <button type="button" class="btn btn-outline-danger rounded-pill mb-3 me-1"><i class="ri-heart-fill me-1"></i>Danger</button>
            <button type="button" class="btn btn-outline-warning rounded-pill mb-3 me-1"><i class="ri-bill-fill me-1"></i>Warning</button>
            <button type="button" class="btn btn-outline-info rounded-pill mb-3 me-1"><i class="ri-heart-fill me-1"></i>Info</button>
            <button type="button" class="btn btn-outline-dark rounded-pill mb-3 me-1"><i class="ri-heart-fill me-1"></i>Dark</button>
            <button type="button" class="btn btn-outline-link rounded-pill mb-3 me-1"><i class="ri-bill-fill me-1"></i>Link</button>
          </template>
        </iq-card>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-6 col-sm-12">
        <iq-card>
          <template v-slot:headerTitle>
            <h4 class="card-title">Button Tags</h4>
          </template>
          <template v-slot:headerAction>
          <collapse className="text-primary float-right"  data-bs-toggle="collapse" collapseTarget="example-collapse8" ariaControls="example-collapse8">
            <i class="ri-code-s-slash-line" />
          </collapse>
          </template>
          <template v-slot:body>
            <p class="mb-4">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever</p>
            <collapse-content id="example-collapse8" className="mb-2">
              <div class="card">
                <kbd class="bg-dark">
                  <pre class="text-white" id="buttons-tags">
                    <code>
&lt;button type=&quot;button&quot; class=&quot;btn btn-primary me-1&quot;&gt;Link&lt;/button&gt;
&lt;button type=&quot;button&quot; class=&quot;btn btn-success me-1&quot;&gt;Button&lt;/button&gt;
&lt;button type=&quot;button&quot; class=&quot;btn btn-danger me-1&quot;&gt;Input&lt;/button&gt;
&lt;button type=&quot;button&quot; class=&quot;btn btn-warning me-1&quot;&gt;Submit&lt;/button&gt;
&lt;button type=&quot;button&quot; class=&quot;btn btn-info me-1&quot;&gt;Reset&lt;/button&gt;
</code></pre>
                </kbd>
              </div>
            </collapse-content>
            <button type="button" class="btn mt-1 btn-primary me-1">Link</button>
            <button type="button" class="btn mt-1 btn-success me-1">Button</button>
            <button type="button" class="btn mt-1 btn-danger me-1">Input</button>
            <button type="button" class="btn mt-1 btn-warning me-1">Submit</button>
            <button type="button" class="btn mt-1 btn-info me-1">Reset</button>
          </template>
        </iq-card>
      </div>
      <div class="col-lg-6 col-sm-12">
        <iq-card>
          <template v-slot:headerTitle>
            <h4 class="card-title">Button Sizes</h4>
          </template>
          <template v-slot:headerAction>
          <collapse className="text-primary float-right"  data-bs-toggle="collapse" collapseTarget="example-collapse9" ariaControls="example-collapse9">
            <i class="ri-code-s-slash-line" />
          </collapse>
          </template>
          <template v-slot:body>
            <p class="mb-4">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever</p>
            <collapse-content id="example-collapse9" className="mb-2">
              <div class="card">
                <kbd class="bg-dark">
                  <pre class="text-white" id="buttons-sizes">
                    <code>
&lt;button type=&quot;button&quot; class=&quot;btn btn-primary me-1 btn-sm&quot;&gt;Small Button&lt;/button&gt;
&lt;button type=&quot;button&quot; class=&quot;btn btn-success me-1&quot;&gt;Button&lt;/button&gt;
&lt;button type=&quot;button&quot; class=&quot;btn btn-info me-1 btn-lg&quot;&gt;Large Button&lt;/button&gt;
</code></pre>
                </kbd>
              </div>
            </collapse-content>
            <button type="button" class="btn btn-primary me-1 btn-sm">Small Button</button>
            <button type="button" class="btn btn-success me-1">Button</button>
            <button type="button" class="btn btn-info me-1 btn-lg">Large Button</button>
          </template>
        </iq-card>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-6 col-sm-12">
        <iq-card>
          <template v-slot:headerTitle>
            <h4 class="card-title">Block Buttons</h4>
          </template>
          <template v-slot:headerAction>
          <collapse className="text-primary float-right"  data-bs-toggle="collapse" collapseTarget="example-collapse10" ariaControls="example-collapse10">
            <i class="ri-code-s-slash-line" />
          </collapse>
          </template>
          <template v-slot:body>
            <p class="mb-4">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever</p>
            <collapse-content id="example-collapse10" className="mb-2">
              <div class="card">
                <kbd class="bg-dark">
                  <pre class="text-white" id="block-buttons-21">
                    <code>
&lt;button class=&quot;btn btn-primary&quot; type=&quot;button&quot;&gt;Block level Button&lt;/button&gt;
&lt;button class=&quot;btn btn-success&quot; type=&quot;button&quot;&gt;Block level Button&lt;/button&gt;
</code></pre>
                </kbd>
              </div>
            </collapse-content>
            <!-- <b-button block variant="primary">Block level button</b-button>
            <b-button block variant="success">Block level button</b-button> -->
            <div class="d-grid gap-2">
              <button class="btn btn-primary" type="button">Block level Button</button>
              <button class="btn btn-success" type="button">Block level Button</button>
            </div>
          </template>
        </iq-card>
      </div>
      <div class="col-lg-6 col-sm-12">
        <iq-card>
          <template v-slot:headerTitle>
            <h4 class="card-title">Icons Buttons</h4>
          </template>
          <template v-slot:headerAction>
          <collapse className="text-primary float-right"  data-bs-toggle="collapse" collapseTarget="example-collapse11" ariaControls="example-collapse11">
            <i class="ri-code-s-slash-line" />
          </collapse>
          </template>
          <template v-slot:body>
            <p class="mb-4">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever</p>
            <collapse-content id="example-collapse11" className="mb-2">
              <div class="card">
                <kbd class="bg-dark">
                  <pre class="text-white" id="block-buttons">
                    <code>
&lt;button type=&quot;button&quot; class=&quot;btn btn-primary mb-1 me-1&quot;&gt;&lt;i class=&quot;ri-heart-fill me-0&quot;&gt;&lt;/i&gt;&lt;/button&gt;
&lt;button type=&quot;button&quot; class=&quot;btn btn-secondary mb-1 me-1&quot;&gt;&lt;i class=&quot;ri-star-fill me-0&quot;&gt;&lt;/i&gt;&lt;/button&gt;
&lt;button type=&quot;button&quot; class=&quot;btn btn-success mb-1 me-1&quot;&gt;&lt;i class=&quot;ri-settings-4-fill me-0&quot;&gt;&lt;/i&gt;&lt;/button&gt;
&lt;button type=&quot;button&quot; class=&quot;btn btn-danger mb-1 me-1&quot;&gt;&lt;i class=&quot;ri-radio-button-fill me-0&quot;&gt;&lt;/i&gt;&lt;/button&gt;
&lt;button type=&quot;button&quot; class=&quot;btn btn-warning mb-1 me-1&quot;&gt;&lt;i class=&quot;ri-bill-fill me-0&quot;&gt;&lt;/i&gt;&lt;/button&gt;
&lt;button type=&quot;button&quot; class=&quot;btn btn-info mb-1 me-1&quot;&gt;&lt;i class=&quot;ri-lock-fill me-0&quot;&gt;&lt;/i&gt;&lt;/button&gt;
&lt;button type=&quot;button&quot; class=&quot;btn btn-dark mb-1 me-1&quot;&gt;&lt;i class=&quot;ri-time-fill me-0&quot;&gt;&lt;/i&gt;&lt;/button&gt;
&lt;button type=&quot;button&quot; class=&quot;btn btn-link mb-1 me-1&quot;&gt;&lt;i class=&quot;ri-bill-fill me-0&quot;&gt;&lt;/i&gt;&lt;/button&gt;
&lt;div class=&quot;d-inline-block w-100 mt-3&quot;&gt; &lt;button type=&quot;button&quot; class=&quot;btn btn-primary mb-1 me-1&quot;&gt;&lt;i class=&quot;ri-heart-fill me-1&quot;&gt;&lt;/i&gt;Buttons&lt;/button&gt;
&lt;button type=&quot;button&quot; class=&quot;btn btn-secondary mb-1 me-1&quot;&gt;&lt;i class=&quot;ri-star-fill me-1&quot;&gt;&lt;/i&gt;Buttons&lt;/button&gt;
&lt;button type=&quot;button&quot; class=&quot;btn btn-success mb-1 me-1&quot;&gt;&lt;i class=&quot;ri-settings-4-fill me-1&quot;&gt;&lt;/i&gt;Buttons&lt;/button&gt;
&lt;button type=&quot;button&quot; class=&quot;btn btn-danger mb-1 me-1&quot;&gt;&lt;i class=&quot;ri-radio-button-fill me-1&quot;&gt;&lt;/i&gt;Buttons&lt;/button&gt;
&lt;button type=&quot;button&quot; class=&quot;btn btn-info mb-1 me-1&quot;&gt;&lt;i class=&quot;ri-lock-fill me-1&quot;&gt;&lt;/i&gt;Buttons&lt;/button&gt;
</code></pre>
                </kbd>
              </div>
            </collapse-content>
            <button type="button" class="btn d-inline-flex btn-primary me-1 mb-1"><i class="material-symbols-outlined me-0">info</i></button>
                  <button type="button" class="btn d-inline-flex btn-secondary me-1 mb-1"><i class="material-symbols-outlined me-0">gpp_maybe</i></button>
                  <button type="button" class="btn d-inline-flex btn-success me-1 mb-1"><i class="material-symbols-outlined me-0">add_alert</i></button>
                  <button type="button" class="btn d-inline-flex btn-danger me-1 mb-1"><i class="material-symbols-outlined me-0">report_off</i></button>
                  <button type="button" class="btn d-inline-flex btn-warning me-1 mb-1"><i class="material-symbols-outlined me-0">show_chart</i></button>
                  <button type="button" class="btn d-inline-flex btn-info me-1 mb-1"><i class="material-symbols-outlined me-0">wifi_off</i></button>
                  <button type="button" class="btn d-inline-flex btn-light me-1 mb-1"><i class="material-symbols-outlined me-0">rss_feed</i></button>
                  <button type="button" class="btn d-inline-flex btn-dark me-1 mb-1"><i class="material-symbols-outlined me-0">backup</i></button>
                  <button type="button" class="btn d-inline-flex btn-link me-1 mb-1"><i class="material-symbols-outlined me-0">album</i></button>
                  <div class="d-inline-block w-100 mt-1">
                     <button type="button" class="btn d-inline-flex btn-primary me-1 mb-1"><i class="material-symbols-outlined me-1">favorite</i>Buttons</button>
                     <button type="button" class="btn d-inline-flex btn-secondary me-1 mb-1"><i class="material-symbols-outlined me-1">favorite</i>Buttons</button>
                     <button type="button" class="btn d-inline-flex btn-success me-1 mb-1"><i class="material-symbols-outlined me-1">favorite</i>Buttons</button>
                     <button type="button" class="btn d-inline-flex btn-danger me-1 mb-1"><i class="material-symbols-outlined me-1">favorite</i>Buttons</button>
                     <button type="button" class="btn d-inline-flex btn-info me-1 mb-1"><i class="material-symbols-outlined me-1">favorite</i>Buttons</button>
                  </div>
          </template>
        </iq-card>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-6 col-sm-12">
        <iq-card>
          <template v-slot:headerTitle>
            <h4 class="card-title">Social Disabled State</h4>
          </template>
          <template v-slot:headerAction>
          <collapse className="text-primary float-right"  data-bs-toggle="collapse" collapseTarget="example-collapse12" ariaControls="example-collapse12">
            <i class="ri-code-s-slash-line" />
          </collapse>
          </template>
          <template v-slot:body>
            <p class="mb-4">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever</p>
            <collapse-content id="example-collapse12" className="mb-2">
              <div class="card">
                <kbd class="bg-dark">
                  <pre class="text-white" id="social-disabled-state">
                    <code>
&lt;button type=&quot;button&quot; class=&quot;btn btn-primary me-1 mt-1&quot; disabled=&quot;&quot;&gt;Primary button&lt;/button&gt;
&lt;button type=&quot;button&quot; disabled=&quot;disabled&quot; class=&quot;btn me-1 mt-1 btn-success disabled&quot;&gt;Button&lt;/button&gt;
&lt;button type=&quot;button&quot; disabled=&quot;disabled&quot; class=&quot;btn me-1 mt-1 btn-outline-primary disabled&quot;&gt;Button&lt;/button&gt;
</code></pre>
                </kbd>
              </div>
            </collapse-content>
            <button type="button" class="btn btn-primary me-1 mt-1" disabled="">Primary button</button>
            <button type="button" disabled="disabled" class="btn me-1 mt-1 btn-success disabled">Button</button>
            <button type="button" disabled="disabled" class="btn me-1 mt-1 btn-outline-primary disabled">Button</button>
          </template>
        </iq-card>
      </div>
      <div class="col-lg-6 col-sm-12">
        <iq-card>
          <template v-slot:headerTitle>
            <h4 class="card-title">Buttons Toggle States</h4>
          </template>
          <template v-slot:headerAction>
          <collapse className="text-primary float-right"  data-bs-toggle="collapse" collapseTarget="example-collapse13" ariaControls="example-collapse13">
            <i class="ri-code-s-slash-line" />
          </collapse>
          </template>
          <template v-slot:body>
            <p class="mb-4">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever</p>
            <collapse-content id="example-collapse13" className="mb-2">
              <div class="card">
                <kbd class="bg-dark">
                  <pre class="text-white" id="buttons-toggle-states">
                    <code>
&lt;button type=&quot;button&quot; class=&quot;btn btn-primary&quot; data-toggle=&quot;button&quot; aria-pressed=&quot;false&quot;&gt;Single toggle&lt;/button&gt;
</code></pre>
                </kbd>
              </div>
            </collapse-content>
            <button type="button" class="btn btn-primary" data-toggle="button" aria-pressed="false">Single toggle</button>
          </template>
        </iq-card>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-6 col-sm-12">
        <iq-card>
          <template v-slot:headerTitle>
            <h4 class="card-title">Default Buttons Active</h4>
          </template>
          <template v-slot:headerAction>
          <collapse className="text-primary float-right"  data-bs-toggle="collapse" collapseTarget="example-collapse14" ariaControls="example-collapse14">
            <i class="ri-code-s-slash-line" />
          </collapse>
          </template>
          <template v-slot:body>
            <p class="mb-4">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever</p>
            <collapse-content id="example-collapse14" className="mb-2">
              <div class="card">
                <kbd class="bg-dark">
                  <pre class="text-white" id="buttons-active">
                    <code>
&lt;button type=&quot;button&quot; class=&quot;btn btn-primary active mb-3 me-1&quot;&gt;Active&lt;/button&gt;
&lt;button type=&quot;button&quot; class=&quot;btn active mb-3 me-1 btn-secondary&quot;&gt;Active&lt;/button&gt;
&lt;button type=&quot;button&quot; class=&quot;btn active mb-3 me-1 btn-warning&quot; &gt;Active&lt;/button&gt;
&lt;button type=&quot;button&quot; disabled=&quot;disabled&quot; class=&quot;btn mb-3 me-1 btn-accent disabled&quot;&gt;Disabled&lt;/button&gt;
&lt;button type=&quot;button&quot; disabled=&quot;disabled&quot; class=&quot;btn mb-3 me-1 btn-primary disabled&quot;&gt;Disabled&lt;/button&gt;
&lt;button type=&quot;button&quot; disabled=&quot;disabled&quot; class=&quot;btn mb-3 me-1 btn-outline-primary disabled&quot;&gt;Disabled&lt;/button&gt;
</code></pre>
                </kbd>
              </div>
            </collapse-content>
            <button type="button" class="btn btn-primary active mb-3 me-1">Active</button>
            <button type="button" class="btn active mb-3 me-1 btn-secondary">Active</button>
            <button type="button" class="btn active mb-3 me-1 btn-warning" >Active</button>
            <button type="button" disabled="disabled" class="btn mb-3 me-1 btn-accent disabled">Disabled</button>
            <button type="button" disabled="disabled" class="btn mb-3 me-1 btn-primary disabled">Disabled</button>
            <button type="button" disabled="disabled" class="btn mb-3 me-1 btn-outline-primary disabled">Disabled</button>
          </template>
        </iq-card>
      </div>
      <div class="col-lg-6 col-sm-12">
        <iq-card>
          <template v-slot:headerTitle>
            <h4 class="card-title">Button Group Sizing</h4>
          </template>
          <template v-slot:headerAction>
          <collapse className="text-primary float-right"  data-bs-toggle="collapse" collapseTarget="example-collapse15" ariaControls="example-collapse15">
            <i class="ri-code-s-slash-line" />
          </collapse>
          </template>
          <template v-slot:body>
            <p class="mb-4">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever</p>
            <collapse-content id="example-collapse15" className="mb-2">
              <div class="card">
                <kbd class="bg-dark">
                  <pre class="text-white" id="button-group-sizing">
                    <code>
&lt;div class=&quot;bd-example&quot;&gt;
&lt;div class=&quot;btn-group btn-group-lg&quot; role=&quot;group&quot; aria-label=&quot;Large button group&quot;&gt;
&lt;button type=&quot;button&quot; class=&quot;btn btn-outline-primary&quot;&gt;Left&lt;/button&gt;
&lt;button type=&quot;button&quot; class=&quot;btn btn-outline-primary&quot;&gt;Middle&lt;/button&gt;
&lt;button type=&quot;button&quot; class=&quot;btn btn-outline-primary&quot;&gt;Right&lt;/button&gt;
&lt;/div&gt;&lt;br&gt;
&lt;div class=&quot;btn-group&quot; role=&quot;group&quot; aria-label=&quot;Default button group&quot;&gt;
&lt;button type=&quot;button&quot; class=&quot;btn btn-outline-primary&quot;&gt;Left&lt;/button&gt;
&lt;button type=&quot;button&quot; class=&quot;btn btn-outline-primary&quot;&gt;Middle&lt;/button&gt;
&lt;button type=&quot;button&quot; class=&quot;btn btn-outline-primary&quot;&gt;Right&lt;/button&gt;
&lt;/div&gt;&lt;br&gt;
&lt;div class=&quot;btn-group btn-group-sm&quot; role=&quot;group&quot; aria-label=&quot;Small button group&quot;&gt;
&lt;button type=&quot;button&quot; class=&quot;btn btn-outline-primary&quot;&gt;Left&lt;/button&gt;
&lt;button type=&quot;button&quot; class=&quot;btn btn-outline-primary&quot;&gt;Middle&lt;/button&gt;
&lt;button type=&quot;button&quot; class=&quot;btn btn-outline-primary&quot;&gt;Right&lt;/button&gt;
&lt;/div&gt;
&lt;/div&gt;
</code></pre>
                </kbd>
              </div>
            </collapse-content>
            <div class="bd-example">
              <div class="btn-group btn-group-lg" role="group" aria-label="Large button group">
                <button type="button" class="btn btn-outline-primary">Left</button>
                <button type="button" class="btn btn-outline-primary">Middle</button>
                <button type="button" class="btn btn-outline-primary">Right</button>
              </div><br>
              <div class="btn-group" role="group" aria-label="Default button group">
                <button type="button" class="btn btn-outline-primary">Left</button>
                <button type="button" class="btn btn-outline-primary">Middle</button>
                <button type="button" class="btn btn-outline-primary">Right</button>
              </div><br>
              <div class="btn-group btn-group-sm" role="group" aria-label="Small button group">
                <button type="button" class="btn btn-outline-primary">Left</button>
                <button type="button" class="btn btn-outline-primary">Middle</button>
                <button type="button" class="btn btn-outline-primary">Right</button>
              </div>
            </div>
          </template>
        </iq-card>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-6 col-sm-12">
        <iq-card>
          <template v-slot:headerTitle>
            <h4 class="card-title">Buttons Group</h4>
          </template>
          <template v-slot:headerAction>
          <collapse className="text-primary float-right"  data-bs-toggle="collapse" collapseTarget="example-collapse16" ariaControls="example-collapse16">
            <i class="ri-code-s-slash-line" />
          </collapse>
          </template>
          <template v-slot:body>
            <p class="mb-4">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever</p>
            <collapse-content id="example-collapse16" className="mb-2">
              <div class="card">
                <kbd class="bg-dark">
                  <pre class="text-white" id="buttons-group">
                    <code>
&lt;div class=&quot;btn-group mt-1 me-1&quot; role=&quot;group&quot; aria-label=&quot;Basic example&quot;&gt;
&lt;button type=&quot;button&quot; class=&quot;btn btn-primary&quot;&gt;Left&lt;/button&gt;
&lt;button type=&quot;button&quot; class=&quot;btn btn-primary&quot;&gt;Middle&lt;/button&gt;
&lt;button type=&quot;button&quot; class=&quot;btn btn-primary&quot;&gt;Right&lt;/button&gt;
&lt;/div&gt;
&lt;div class=&quot;btn-group mt-1&quot;&gt;
&lt;a href=&quot;#&quot; class=&quot;btn btn-primary active&quot; aria-current=&quot;page&quot;&gt;Active link&lt;/a&gt;
&lt;a href=&quot;#&quot; class=&quot;btn btn-primary&quot;&gt;Link&lt;/a&gt;
&lt;a href=&quot;#&quot; class=&quot;btn btn-primary&quot;&gt;Link&lt;/a&gt;
&lt;/div&gt;
&lt;div class=&quot;btn-group mt-1 me-1&quot; role=&quot;group&quot; aria-label=&quot;Basic outlined example&quot;&gt;
&lt;button type=&quot;button&quot; class=&quot;btn btn-outline-primary&quot;&gt;Left&lt;/button&gt;
&lt;button type=&quot;button&quot; class=&quot;btn btn-outline-primary&quot;&gt;Middle&lt;/button&gt;
&lt;button type=&quot;button&quot; class=&quot;btn btn-outline-primary&quot;&gt;Right&lt;/button&gt;
&lt;/div&gt;
&lt;div class=&quot;btn-group mt-1&quot; role=&quot;group&quot; aria-label=&quot;Basic mixed styles example&quot;&gt;
&lt;button type=&quot;button&quot; class=&quot;btn btn-danger&quot;&gt;Left&lt;/button&gt;
&lt;button type=&quot;button&quot; class=&quot;btn btn-warning&quot;&gt;Middle&lt;/button&gt;
&lt;button type=&quot;button&quot; class=&quot;btn btn-success&quot;&gt;Right&lt;/button&gt;
&lt;/div&gt;
</code></pre>
                </kbd>
              </div>
            </collapse-content>
            <div class="btn-group mt-1 me-1" role="group" aria-label="Basic example">
              <button type="button" class="btn btn-primary">Left</button>
              <button type="button" class="btn btn-primary">Middle</button>
              <button type="button" class="btn btn-primary">Right</button>
            </div>
            <div class="btn-group mt-1">
              <a href="#" class="btn btn-primary active" aria-current="page">Active link</a>
              <a href="#" class="btn btn-primary">Link</a>
              <a href="#" class="btn btn-primary">Link</a>
            </div>
            <div class="btn-group mt-1 me-1" role="group" aria-label="Basic outlined example">
              <button type="button" class="btn btn-outline-primary">Left</button>
              <button type="button" class="btn btn-outline-primary">Middle</button>
              <button type="button" class="btn btn-outline-primary">Right</button>
            </div>
            <div class="btn-group mt-1" role="group" aria-label="Basic mixed styles example">
              <button type="button" class="btn btn-danger">Left</button>
              <button type="button" class="btn btn-warning">Middle</button>
              <button type="button" class="btn btn-success">Right</button>
            </div>
          </template>
        </iq-card>
      </div>
      <div class="col-lg-6 col-sm-12">
        <iq-card>
          <template v-slot:headerTitle>
            <h4 class="card-title">Buttons Dropdown</h4>
          </template>
          <template v-slot:headerAction>
          <collapse className="text-primary float-right"  data-bs-toggle="collapse" collapseTarget="example-collapse17" ariaControls="example-collapse17">
            <i class="ri-code-s-slash-line" />
          </collapse>
          </template>
          <template v-slot:body>
            <p class="mb-4">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever</p>
            <collapse-content id="example-collapse17" className="mb-2">
              <div class="card">
                <kbd class="bg-dark">
                  <pre class="text-white" id="buttons-dropdown">
                    <code>
&lt;div class=&quot;btn-group&quot; role=&quot;group&quot; aria-label=&quot;Button group with nested dropdown&quot;&gt;
&lt;button type=&quot;button&quot; class=&quot;btn btn-primary&quot;&gt;1&lt;/button&gt;
&lt;button type=&quot;button&quot; class=&quot;btn btn-primary&quot;&gt;2&lt;/button&gt;
&lt;div class=&quot;btn-group&quot; role=&quot;group&quot;&gt;
&lt;button id=&quot;btnGroupDrop1&quot; type=&quot;button&quot; class=&quot;btn btn-primary dropdown-toggle&quot; data-bs-toggle=&quot;dropdown&quot; aria-expanded=&quot;false&quot;&gt; Dropdown &lt;/button&gt;
&lt;ul class=&quot;dropdown-menu&quot; aria-labelledby=&quot;btnGroupDrop1&quot;&gt;
&lt;li&gt;&lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Dropdown link&lt;/a&gt;&lt;/li&gt;
&lt;li&gt;&lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Dropdown link&lt;/a&gt;&lt;/li&gt;
&lt;/ul&gt;
&lt;/div&gt;
&lt;/div&gt;
&lt;div class=&quot;d-block mt-1&quot;&gt; &lt;div class=&quot;btn-group-vertical &quot; role=&quot;group&quot; aria-label=&quot;Vertical button group&quot;&gt;
&lt;button type=&quot;button&quot; class=&quot;btn btn-primary&quot;&gt;1&lt;/button&gt;
&lt;button type=&quot;button&quot; class=&quot;btn btn-primary&quot;&gt;2&lt;/button&gt;
&lt;div class=&quot;btn-group&quot; role=&quot;group&quot;&gt; &lt;button id=&quot;btnGroupVerticalDrop1&quot; type=&quot;button&quot; class=&quot;btn btn-primary dropdown-toggle&quot; data-bs-toggle=&quot;dropdown&quot; aria-expanded=&quot;false&quot;&gt; Dropdown &lt;/button&gt;
&lt;ul class=&quot;dropdown-menu&quot; aria-labelledby=&quot;btnGroupVerticalDrop1&quot;&gt;
&lt;li&gt;&lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Dropdown link&lt;/a&gt;&lt;/li&gt;
&lt;li&gt;&lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Dropdown link&lt;/a&gt;&lt;/li&gt;
&lt;/ul&gt;
&lt;/div&gt;
&lt;/div&gt;
&lt;/div&gt;
</code></pre>
                </kbd>
              </div>
            </collapse-content>
            <div class="btn-group" role="group" aria-label="Button group with nested dropdown">
              <button type="button" class="btn btn-primary">1</button>
              <button type="button" class="btn btn-primary">2</button>

              <div class="btn-group" role="group">
                <button id="btnGroupDrop1" type="button" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                  Dropdown
                </button>
                <ul class="dropdown-menu" aria-labelledby="btnGroupDrop1">
                  <li><a class="dropdown-item" href="#">Dropdown link</a></li>
                  <li><a class="dropdown-item" href="#">Dropdown link</a></li>
                </ul>
              </div>
            </div>
            <div class="d-block mt-1">
              <div class="btn-group-vertical " role="group" aria-label="Vertical button group">
                <button type="button" class="btn btn-primary">1</button>
                <button type="button" class="btn btn-primary">2</button>
                <div class="btn-group" role="group">
                  <button id="btnGroupVerticalDrop1" type="button" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                  Dropdown
                  </button>
                  <ul class="dropdown-menu" aria-labelledby="btnGroupVerticalDrop1">
                    <li><a class="dropdown-item" href="#">Dropdown link</a></li>
                    <li><a class="dropdown-item" href="#">Dropdown link</a></li>
                  </ul>
                </div>
              </div>
            </div>
          </template>
        </iq-card>
      </div>
    </div>
</template>
<script>
// import { socialvue } from '../../config/pluginInit'
export default {
  name: 'UiButtons',
  mounted () {
    // socialvue.index()
  }
}
</script>
