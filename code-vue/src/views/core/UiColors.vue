<template>
  <div class="row">
    <div class="col-sm-12">
        <div class="card position-relative inner-page-bg bg-primary" style="height: 150px;">
          <div class="inner-page-title">
              <h3 class="text-white">Color Page</h3>
              <p class="text-white">lorem ipsum</p>
          </div>
        </div>
    </div>
    <div class="col-lg-12">
      <iq-card>
        <template v-slot:headerTitle>
          <h4 class="card-title">SocialV Color</h4>
        </template>
        <template v-slot:headerAction>
          <collapse className="text-primary float-right"  data-bs-toggle="collapse" collapseTarget="example-collapse" ariaControls="example-collapse">
            <i class="ri-code-s-slash-line" />
          </collapse>
        </template>
        <template v-slot:body>
          <p>Similar to the contextual text color classes, easily set the background of an element to any contextual class. Anchor components will darken on hover, just like the text classes. Background utilities <strong>do not set <code>color</code></strong>, so in some cases you’ll want to use <code>.text-*</code> utilities.</p>
          <collapse-content id="example-collapse" class="mb-2">
            <div class="card">
              <kbd class="bg-dark">
                <pre class="text-white" id="socialvue-color1">
                  <code>
&lt;p class="bg-primary pt-5 pb-5 text-center rounded"&gt;&lt;/p&gt;
&lt;h6&gt;Primary&lt;/h6&gt;

&lt;p class="bg-secondary pt-5 pb-5 text-center rounded"&gt;&lt;/p&gt;
&lt;h6&gt;Secondary&lt;/h6&gt;

&lt;p class="bg-success pt-5 pb-5 text-center rounded"&gt;&lt;/p&gt;
&lt;h6&gt;Success&lt;/h6&gt;

&lt;p class="bg-danger pt-5 pb-5 text-center rounded"&gt;&lt;/p&gt;
&lt;h6&gt;Danger&lt;/h6&gt;

&lt;p class="bg-warning pt-5 pb-5 text-center rounded"&gt;&lt;/p&gt;
&lt;h6&gt;Warning&lt;/h6&gt;

&lt;p class="bg-info pt-5 pb-5 text-center rounded"&gt;&lt;/p&gt;
&lt;h6&gt;Info&lt;/h6&gt;

&lt;p class="bg-light pt-5 pb-5 text-center rounded"&gt;&lt;/p&gt;
&lt;h6&gt;Light&lt;/h6&gt;

&lt;p class="bg-dark pt-5 pb-5 text-center rounded"&gt;&lt;/p&gt;
&lt;h6&gt;Dark&lt;/h6&gt;
</code></pre>
              </kbd>
            </div>
          </collapse-content>
          <div class="row mt-4">
            <div class="col-lg-2 col-md-6 text-center">
              <p class="bg-primary pt-5 pb-5 text-center rounded"></p>
              <h6>Primary</h6>
            </div>
            <div class="col-lg-2 col-md-6 text-center">
              <p class="bg-secondary pt-5 pb-5 text-center rounded"></p>
              <h6>Secondary</h6>
            </div>
            <div class="col-lg-2 col-md-6 text-center">
              <p class="bg-success pt-5 pb-5 text-center rounded"></p>
              <h6>Success</h6>
            </div>
            <div class="col-lg-2 col-md-6 text-center">
              <p class="bg-danger pt-5 pb-5 text-center rounded"></p>
              <h6>Danger</h6>
            </div>
            <div class="col-lg-2 col-md-6 text-center">
              <p class="bg-warning pt-5 pb-5 text-center rounded"></p>
              <h6>Warning</h6>
            </div>
            <div class="col-lg-2 col-md-6 text-center">
              <p class="bg-info pt-5 pb-5 text-center rounded"></p>
              <h6>Info</h6>
            </div>
            <div class="col-lg-2 col-md-6 text-center mt-4">
              <p class="bg-light pt-5 pb-5 text-center rounded"></p>
              <h6>Light</h6>
            </div>
            <div class="col-lg-2 col-md-6 text-center mt-4">
              <p class="bg-dark pt-5 pb-5 text-center rounded"></p>
              <h6>Dark</h6>
            </div>
          </div>
        </template>
      </iq-card>
      <iq-card>
        <template v-slot:headerTitle>
          <h4 class="card-title">SocialV Color</h4>
        </template>
        <template v-slot:headerAction>
          <collapse className="text-primary float-right"  data-bs-toggle="collapse" collapseTarget="example-collapse1" ariaControls="example-collapse1">
            <i class="ri-code-s-slash-line" />
          </collapse>
        </template>
        <template v-slot:body>
          <p>Similar to the contextual text color classes, easily set the background of an element to any contextual class. Anchor components will darken on hover, just like the text classes. Background utilities <strong>do not set <code>color</code></strong>, so in some cases you’ll want to use <code>.text-*</code> utilities.</p>
          <collapse-content id="example-collapse1" className="mb-2">
            <div class="card">
              <kbd class="bg-dark">
                <pre class="text-white" id="socialvue-color2">
                  <code>
&lt;p class="bg-soft-primary pt-5 pb-5 text-center rounded font-size-18"&gt;Primary&lt;/p&gt;

&lt;p class="bg-soft-secondary pt-5 pb-5 text-center rounded font-size-18"&gt;Secondary&lt;/p&gt;

&lt;p class="bg-soft-success pt-5 pb-5 text-center rounded font-size-18"&gt;Success&lt;/p&gt;

&lt;p class="bg-soft-danger pt-5 pb-5 text-center rounded font-size-18"&gt;Danger&lt;/p&gt;

&lt;p class="bg-soft-warning pt-5 pb-5 text-center rounded font-size-18"&gt;Warning&lt;/p&gt;

&lt;p class="bg-soft-info pt-5 pb-5 text-center rounded font-size-18"&gt;Info&lt;/p&gt;

&lt;p class="bg-soft-dark pt-5 pb-5 text-center rounded font-size-18"&gt;Dark&lt;/p&gt;
</code></pre>
              </kbd>
            </div>
          </collapse-content>
          <div class="row mt-4">
            <div class="col-lg-2 col-md-6 text-center">
              <p class="bg-soft-primary pt-5 pb-5 text-center rounded font-size-18">Primary</p>
            </div>
            <div class="col-lg-2 col-md-6 text-center">
              <p class="bg-soft-secondary pt-5 pb-5 text-center rounded font-size-18">Secondary</p>
            </div>
            <div class="col-lg-2 col-md-6 text-center">
              <p class="bg-soft-success pt-5 pb-5 text-center rounded font-size-18  ">Success</p>
            </div>
            <div class="col-lg-2 col-md-6 text-center">
              <p class="bg-soft-danger pt-5 pb-5 text-center rounded font-size-18">Danger</p>
            </div>
            <div class="col-lg-2 col-md-6 text-center">
              <p class="bg-soft-warning pt-5 pb-5 text-center rounded font-size-18">Warning</p>
            </div>
            <div class="col-lg-2 col-md-6 text-center">
              <p class="bg-soft-info pt-5 pb-5 text-center rounded font-size-18">Info</p>
            </div>
            <div class="col-lg-2 col-md-6 text-center mt-4">
              <p class="bg-soft-dark pt-5 pb-5 text-center rounded font-size-18">Dark</p>
            </div>
          </div>
        </template>
      </iq-card>
    </div>
    <div class="col-lg-6">
      <iq-card>
        <template v-slot:headerTitle>
          <h4 class="card-title">SocialV Text Color</h4>
        </template>
        <template v-slot:headerAction>
          <collapse className="text-primary float-right"  data-bs-toggle="collapse" collapseTarget="example-collapse2" ariaControls="example-collapse2">
            <i class="ri-code-s-slash-line" />
          </collapse>
        </template>
        <template v-slot:body>
          <p>Contextual text classes also work well on anchors with the provided hover and focus states. <strong>Note that the <code>.text-white</code> and <code>.text-muted</code> class has no additional link styling beyond underline.</strong></p>
          <collapse-content id="example-collapse2" className="mb-2">
            <div class="card">
              <kbd class="bg-dark">
                <pre class="text-white" id="socialvue-text-color1">
                  <code>
&lt;p class="text-primary"&gt;.text-primary&lt;/p&gt;
&lt;p class="text-secondary"&gt;.text-secondary&lt;/p&gt;
&lt;p class="text-success"&gt;.text-success&lt;/p&gt;
&lt;p class="text-danger"&gt;.text-danger&lt;/p&gt;
&lt;p class="text-warning"&gt;.text-warning&lt;/p&gt;
&lt;p class="text-info"&gt;.text-info&lt;/p&gt;
&lt;p class="text-light bg-dark"&gt;.text-light&lt;/p&gt;
&lt;p class="text-dark"&gt;.text-dark&lt;/p&gt;
&lt;p class="text-muted"&gt;.text-muted&lt;/p&gt;
&lt;p class="text-white bg-dark"&gt;.text-white&lt;/p&gt;
&lt;p class="text-black-50"&gt;.text-black-50&lt;/p&gt;
&lt;p class="text-white-50 bg-dark mb-0"&gt;.text-white-50&lt;/p&gt;
</code></pre>
              </kbd>
            </div>
          </collapse-content>
          <p class="text-primary">.text-primary</p>
          <p class="text-secondary">.text-secondary</p>
          <p class="text-success">.text-success</p>
          <p class="text-danger">.text-danger</p>
          <p class="text-warning">.text-warning</p>
          <p class="text-info">.text-info</p>
          <p class="text-light bg-dark">.text-light</p>
          <p class="text-dark">.text-dark</p>
          <p class="text-muted">.text-muted</p>
          <p class="text-white bg-dark">.text-white</p>
          <p class="text-black-50">.text-black-50</p>
          <p class="text-white-50 bg-dark mb-0">.text-white-50</p>
        </template>
      </iq-card>
    </div>
    <div class="col-lg-6">
      <iq-card>
        <template v-slot:headerTitle>
          <h4 class="card-title">SocialV Text Color</h4>
        </template>
        <template v-slot:headerAction>
          <collapse className="text-primary float-right"  data-bs-toggle="collapse" collapseTarget="example-collapse3" ariaControls="example-collapse3">
            <i class="ri-code-s-slash-line" />
          </collapse>
        </template>
        <template v-slot:body>
          <p>Contextual text classes also work well on anchors with the provided hover and focus states. <strong>Note that the <code>.text-white</code> and <code>.text-muted</code> class has no additional link styling beyond underline.</strong></p>
          <collapse-content id="example-collapse3" className="mb-2">
            <div class="card">
              <kbd class="bg-dark">
                <pre class="text-white" id="socialvue-text-color2">
                  <code>
&lt;p&gt;&lt;a href="#" class="text-primary"&gt;Primary link&lt;/a&gt;&lt;/p&gt;
&lt;p&gt;&lt;a href="#" class="text-secondary"&gt;Secondary link&lt;/a&gt;&lt;/p&gt;
&lt;p&gt;&lt;a href="#" class="text-success"&gt;Success link&lt;/a&gt;&lt;/p&gt;
&lt;p&gt;&lt;a href="#" class="text-danger"&gt;Danger link&lt;/a&gt;&lt;/p&gt;
&lt;p&gt;&lt;a href="#" class="text-warning"&gt;Warning link&lt;/a&gt;&lt;/p&gt;
&lt;p&gt;&lt;a href="#" class="text-info"&gt;Info link&lt;/a&gt;&lt;/p&gt;
&lt;p&gt;&lt;a href="#" class="text-light bg-dark"&gt;Light link&lt;/a&gt;&lt;/p&gt;
&lt;p&gt;&lt;a href="#" class="text-dark"&gt;Dark link&lt;/a&gt;&lt;/p&gt;
&lt;p&gt;&lt;a href="#" class="text-muted"&gt;Muted link&lt;/a&gt;&lt;/p&gt;
&lt;p class="mb-0"&gt;&lt;a href="#" class="text-white bg-dark"&gt;White link&lt;/a&gt;&lt;/p&gt;
</code></pre>
              </kbd>
            </div>
          </collapse-content>
          <p><a href="#" class="text-primary">Primary link</a></p>
          <p><a href="#" class="text-secondary">Secondary link</a></p>
          <p><a href="#" class="text-success">Success link</a></p>
          <p><a href="#" class="text-danger">Danger link</a></p>
          <p><a href="#" class="text-warning">Warning link</a></p>
          <p><a href="#" class="text-info">Info link</a></p>
          <p><a href="#" class="text-light bg-dark">Light link</a></p>
          <p><a href="#" class="text-dark">Dark link</a></p>
          <p><a href="#" class="text-muted">Muted link</a></p>
          <p class="mb-0"><a href="#" class="text-white bg-dark">White link</a></p>
        </template>
      </iq-card>
    </div>
    <div class="col-lg-6">
      <iq-card>
        <template v-slot:headerTitle>
          <h4 class="card-title">SocialV Text Color</h4>
        </template>
        <template v-slot:headerAction>
          <collapse className="text-primary float-right"  data-bs-toggle="collapse" collapseTarget="example-collapse4" ariaControls="example-collapse4">
            <i class="ri-code-s-slash-line" />
          </collapse>
        </template>
        <template v-slot:body>
          <p>Contextual text classes also work well on anchors with the provided hover and focus states. <strong>Note that the <code>.text-white</code> and <code>.text-muted</code> class has no additional link styling beyond underline.</strong></p>
          <collapse-content id="example-collapse4" className="mb-2">
            <div class="card">
              <kbd class="bg-dark">
                <pre class="text-white" id="socialvue-text-color3">
                  <code>
&lt;p class="bg-soft-primary ps-3 pe-3 pt-2 pb-2 rounded"&gt;Primary link&lt;/p&gt;
&lt;p class="bg-soft-secondary ps-3 pe-3 pt-2 pb-2 rounded"&gt;Secondary link&lt;/p&gt;
&lt;p class="bg-soft-success ps-3 pe-3 pt-2 pb-2 rounded"&gt;Success link&lt;/p&gt;
&lt;p class="bg-soft-danger ps-3 pe-3 pt-2 pb-2 rounded"&gt;Danger link&lt;/p&gt;
&lt;p class="bg-soft-warning ps-3 pe-3 pt-2 pb-2 rounded"&gt;Warning link&lt;/p&gt;
&lt;p class="bg-soft-info ps-3 pe-3 pt-2 pb-2 rounded"&gt;Info link&lt;/p&gt;
&lt;p class="bg-soft-dark ps-3 pe-3 pt-2 pb-2 rounded mb-0"&gt;Dark link&lt;/p&gt;
</code></pre>
              </kbd>
            </div>
          </collapse-content>
          <p class="bg-soft-primary ps-3 pe-3 pt-2 pb-2 rounded">Primary link</p>
          <p class="bg-soft-secondary ps-3 pe-3 pt-2 pb-2 rounded">Secondary link</p>
          <p class="bg-soft-success ps-3 pe-3 pt-2 pb-2 rounded">Success link</p>
          <p class="bg-soft-danger ps-3 pe-3 pt-2 pb-2 rounded">Danger link</p>
          <p class="bg-soft-warning ps-3 pe-3 pt-2 pb-2 rounded">Warning link</p>
          <p class="bg-soft-info ps-3 pe-3 pt-2 pb-2 rounded">Info link</p>
          <p class="bg-soft-dark ps-3 pe-3 pt-2 pb-2 rounded mb-0">Dark link</p>
        </template>
      </iq-card>
    </div>
    <div class="col-lg-6">
      <iq-card>
        <template v-slot:headerTitle>
          <h4 class="card-title">SocialV Text Color</h4>
        </template>
        <template v-slot:headerAction>
          <collapse className="text-primary float-right"  data-bs-toggle="collapse" collapseTarget="example-collapse5" ariaControls="example-collapse5">
            <i class="ri-code-s-slash-line" />
          </collapse>
        </template>
        <template v-slot:body>
          <p>Contextual text classes also work well on anchors with the provided hover and focus states. <strong>Note that the <code>.text-white</code> and <code>.text-muted</code> class has no additional link styling beyond underline.</strong></p>
          <collapse-content id="example-collapse5" className="mb-2">
            <div class="card">
              <kbd class="bg-dark">
                <pre class="text-white" id="socialvue-text-color4">
                  <code>
&lt;p&gt;&lt;a href="#" class="bg-soft-primary ps-3 pe-3 pt-2 pb-2 rounded d-inline-block"&gt;Primary link&lt;/a&gt;&lt;/p&gt;
&lt;p&gt;&lt;a href="#" class="bg-soft-secondary ps-3 pe-3 pt-2 pb-2 rounded d-inline-block"&gt;Secondary link&lt;/a&gt;&lt;/p&gt;
&lt;p&gt;&lt;a href="#" class="bg-soft-success ps-3 pe-3 pt-2 pb-2 rounded d-inline-block"&gt;Success link&lt;/a&gt;&lt;/p&gt;
&lt;p&gt;&lt;a href="#" class="bg-soft-danger ps-3 pe-3 pt-2 pb-2 rounded d-inline-block"&gt;Danger link&lt;/a&gt;&lt;/p&gt;
&lt;p&gt;&lt;a href="#" class="bg-soft-warning ps-3 pe-3 pt-2 pb-2 rounded d-inline-block"&gt;Warning link&lt;/a&gt;&lt;/p&gt;
&lt;p&gt;&lt;a href="#" class="bg-soft-info ps-3 pe-3 pt-2 pb-2 rounded d-inline-block"&gt;Info link&lt;/a&gt;&lt;/p&gt;
&lt;p class="mb-0"&gt;&lt;a href="#" class="bg-dark ps-3 pe-3 pt-2 pb-2 rounded d-inline-block"&gt;Dark link&lt;/a&gt;&lt;/p&gt;
</code></pre>
              </kbd>
            </div>
          </collapse-content>
          <p><a href="#" class="bg-soft-primary ps-3 pe-3 pt-2 pb-2 rounded d-inline-block">Primary link</a></p>
          <p><a href="#" class="bg-soft-secondary ps-3 pe-3 pt-2 pb-2 rounded d-inline-block">Secondary link</a></p>
          <p><a href="#" class="bg-soft-success ps-3 pe-3 pt-2 pb-2 rounded d-inline-block">Success link</a></p>
          <p><a href="#" class="bg-soft-danger ps-3 pe-3 pt-2 pb-2 rounded d-inline-block">Danger link</a></p>
          <p><a href="#" class="bg-soft-warning ps-3 pe-3 pt-2 pb-2 rounded d-inline-block">Warning link</a></p>
          <p><a href="#" class="bg-soft-info ps-3 pe-3 pt-2 pb-2 rounded d-inline-block">Info link</a></p>
          <p class="mb-0"><a href="#" class="bg-dark ps-3 pe-3 pt-2 pb-2 rounded d-inline-block">Dark link</a></p>
        </template>
      </iq-card>
    </div>

  </div>
</template>
<script>
// import { socialvue } from '../../config/pluginInit'

export default {
  name: 'UiColor',
  mounted () {
    // socialvue.index()
  }
}
</script>
