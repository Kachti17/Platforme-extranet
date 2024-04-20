<template>
    <div class="row">
      <div class="col-sm-12">
          <div class="card position-relative inner-page-bg bg-primary" style="height: 150px;">
            <div class="inner-page-title">
                <h3 class="text-white">Badges Page</h3>
                <p class="text-white">lorem ipsum</p>
            </div>
          </div>
      </div>
      <div class="col-lg-6 col-sm-12">
        <iq-card>
          <template v-slot:headerTitle>
            <h4 class="card-title">Badges</h4>
          </template>
          <template v-slot:headerAction>
          <collapse className="text-primary float-right"  data-bs-toggle="collapse" collapseTarget="example-collapse" ariaControls="example-collapse">
            <i class="ri-code-s-slash-line" />
          </collapse>
          </template>
          <template v-slot:body>
            <p>Badges scale to match the size of the immediate parent element by using relative font sizing and <code>em</code> units.</p>
            <collapse-content id="example-collapse" className="mb-2">
              <div class="card">
                <kbd class="bg-dark">
                  <pre class="text-white" id="badges">
                    <code>
&lt;h1 class=&quot;mb-3&quot;&gt;Example heading &lt;span class=&quot;badge bg-primary&quot;&gt;New&lt;/span&gt;&lt;/h1&gt;
&lt;h2 class=&quot;mb-3&quot;&gt;Example heading &lt;span class=&quot;badge bg-secondary&quot;&gt;New&lt;/span&gt;&lt;/h2&gt;
&lt;h3 class=&quot;mb-3&quot;&gt;Example heading &lt;button class=&quot;btn btn-success&quot;&gt; Notifications &lt;span class=&quot;badge bg-light text-dark ms-2&quot;&gt;4&lt;/span&gt;&lt;/button&gt;&lt;/h3&gt;
&lt;h4 class=&quot;mb-3&quot;&gt;Example heading &lt;span class=&quot;badge bg-danger&quot;&gt;New&lt;/span&gt;&lt;/h4&gt;
&lt;h5 class=&quot;mb-3&quot;&gt;Example heading &lt;span class=&quot;badge bg-warning&quot;&gt;New&lt;/span&gt;&lt;/h5&gt;
&lt;h6 class=&quot;mb-0&quot;&gt;Example heading &lt;span class=&quot;badge bg-info&quot;&gt;New&lt;/span&gt;&lt;/h6&gt;
</code></pre>
                </kbd>
              </div>
            </collapse-content>
            <h1 class="mb-3">Example heading <span class="badge bg-primary">New</span></h1>
            <h2 class="mb-3">Example heading <span class="badge bg-secondary">New</span></h2>
            <h3 class="mb-3">Example heading <button class="btn btn-success">
              Notifications <span class="badge bg-light text-dark ms-2">4</span>
            </button></h3>
            <h4 class="mb-3">Example heading <span class="badge bg-danger">New</span></h4>
            <h5 class="mb-3">Example heading <span class="badge bg-warning">New</span></h5>
            <h6 class="mb-0">Example heading <span class="badge bg-info">New</span></h6>
          </template>
        </iq-card>
        <iq-card>
          <template v-slot:headerTitle>
            <h4 class="card-title">Button Badges</h4>
          </template>
          <template v-slot:headerAction>
          <collapse className="text-primary float-right"  data-bs-toggle="collapse" collapseTarget="example-collapse1" ariaControls="example-collapse1">
            <i class="ri-code-s-slash-line" />
          </collapse>
          </template>
          <template v-slot:body>
            <p>Badges can be used as part of buttons to provide a counter.</p>
            <collapse-content id="example-collapse1" className="mb-2">
              <div class="card">
                <kbd class="bg-dark">
                  <pre class="text-white" id="button-badges">
                    <code>
&lt;button type=&quot;button&quot; class=&quot;btn mb-1 btn-primary me-1&quot;&gt; Notifications &lt;span class=&quot;badge bg-light text-dark ms-2&quot;&gt;4&lt;/span&gt; &lt;/button&gt;
&lt;button type=&quot;button&quot; class=&quot;btn mb-1 btn-success me-1&quot;&gt; Notifications &lt;span class=&quot;badge bg-light text-dark ms-2&quot;&gt;4&lt;/span&gt; &lt;/button&gt;
&lt;button type=&quot;button&quot; class=&quot;btn mb-1 btn-danger me-1&quot;&gt; Notifications &lt;span class=&quot;badge bg-light text-dark ms-2&quot;&gt;4&lt;/span&gt; &lt;/button&gt;
</code></pre>
                </kbd>
              </div>
            </collapse-content>
            <button type="button" class="btn mb-1 btn-primary me-1">
              Notifications <span class="badge bg-light text-dark ms-2">4</span>
            </button>
            <button type="button" class="btn mb-1 btn-success me-1">
              Notifications <span class="badge bg-light text-dark ms-2">4</span>
            </button>
            <button type="button" class="btn mb-1 btn-danger me-1">
              Notifications <span class="badge bg-light text-dark ms-2">4</span>
            </button>
        </template>
        </iq-card>
        <iq-card>
          <template v-slot:headerTitle>
            <h4 class="card-title">Button Light background Badges</h4>
          </template>
          <template v-slot:headerAction>
          <collapse className="text-primary float-right"  data-bs-toggle="collapse" collapseTarget="example-collapse2" ariaControls="example-collapse2">
            <i class="ri-code-s-slash-line" />
          </collapse>
          </template>
          <template v-slot:body>
            <p>Badges can be used as part of buttons to provide a counter.</p>
            <collapse-content id="example-collapse2" className="mb-2">
              <div class="card">
                <kbd class="bg-dark">
                  <pre class="text-white" id="button-light-background-badges">
                    <code>
&lt;button type=&quot;button&quot; class=&quot;btn mb-1 btn-outline-primary me-1&quot;&gt; Notifications &lt;span class=&quot;badge bg-light text-dark ms-2&quot;&gt;4&lt;/span&gt; &lt;/button&gt;
&lt;button type=&quot;button&quot; class=&quot;btn mb-1 btn-outline-success me-1&quot;&gt; Notifications &lt;span class=&quot;badge bg-light text-dark ms-2&quot;&gt;4&lt;/span&gt; &lt;/button&gt;
&lt;button type=&quot;button&quot; class=&quot;btn mb-1 btn-outline-danger me-1&quot;&gt; Notifications &lt;span class=&quot;badge bg-light text-dark ms-2&quot;&gt;4&lt;/span&gt; &lt;/button&gt;
</code></pre>
                </kbd>
              </div>
            </collapse-content>
            <button type="button" class="btn mb-1 btn-outline-primary me-1">
              Notifications <span class="badge bg-light text-dark ms-2">4</span>
            </button>
            <button type="button" class="btn mb-1 btn-outline-success me-1">
              Notifications <span class="badge bg-light text-dark ms-2">4</span>
            </button>
            <button type="button" class="btn mb-1 btn-outline-danger me-1">
              Notifications <span class="badge bg-light text-dark ms-2">4</span>
            </button>
          </template>
        </iq-card>
        <iq-card>
          <template v-slot:headerTitle>
            <h4 class="card-title">Button Border Badges</h4>
          </template>
          <template v-slot:headerAction>
          <collapse className="text-primary float-right"  data-bs-toggle="collapse" collapseTarget="example-collapse3" ariaControls="example-collapse3">
            <i class="ri-code-s-slash-line" />
          </collapse>
          </template>
          <template v-slot:body>
            <p>Badges can be used as part of buttons to provide a counter.</p>
            <collapse-content id="example-collapse3" className="mb-2">
              <div class="card">
                <kbd class="bg-dark">
                  <pre class="text-white" id="button-border-badges">
                    <code>
&lt;button type=&quot;button&quot; class=&quot;btn mb-1 btn-soft-primary me-1&quot;&gt; Notifications &lt;span class=&quot;badge bg-primary text-white ms-2&quot;&gt;4&lt;/span&gt; &lt;/button&gt;
&lt;button type=&quot;button&quot; class=&quot;btn mb-1 btn-soft-success me-1&quot;&gt; Notifications &lt;span class=&quot;badge bg-success text-white ms-2&quot;&gt;4&lt;/span&gt; &lt;/button&gt;
&lt;button type=&quot;button&quot; class=&quot;btn mb-1 btn-soft-danger me-1&quot;&gt; Notifications &lt;span class=&quot;badge bg-danger text-white ms-2&quot;&gt;4&lt;/span&gt; &lt;/button&gt;
</code></pre>
                </kbd>
              </div>
            </collapse-content>
            <button type="button" class="btn mb-1 bg-soft-primary me-1">
                        Notifications <span class="badge bg-primary ml-2">4</span>
                        </button>
                        <button type="button" class="btn mb-1 bg-soft-success me-1">
                        Notifications <span class="badge bg-success ml-2">4</span>
                        </button>
                        <button type="button" class="btn mb-1 bg-soft-danger me-1">
                        Notifications <span class="badge bg-danger ml-2">4</span>
                        </button>
          </template>
        </iq-card>
      </div>
      <div class="col-lg-6 col-sm-12">
        <iq-card>
          <template v-slot:headerTitle>
            <h4 class="card-title">Contextual variations</h4>
          </template>
          <template v-slot:headerAction>
          <collapse className="text-primary float-right"  data-bs-toggle="collapse" collapseTarget="example-collapse4" ariaControls="example-collapse4">
            <i class="ri-code-s-slash-line" />
          </collapse>
          </template>
          <template v-slot:body>
            <p class="mb-0">Add any of the below mentioned modifier classes to change the appearance of a badge.</p>
            <collapse-content id="example-collapse4" className="mb-2">
              <div class="card">
                <kbd class="bg-dark">
                  <pre class="text-white" id="contextual-variations">
                    <code>
&lt;span class=&quot;badge bg-primary mt-2 me-1&quot;&gt;Primary&lt;/span&gt;
&lt;span class=&quot;badge bg-secondary mt-2 me-1&quot;&gt;Secondary&lt;/span&gt;
&lt;span class=&quot;badge bg-success mt-2 me-1&quot;&gt;Success&lt;/span&gt;
&lt;span class=&quot;badge bg-danger mt-2 me-1&quot;&gt;Danger&lt;/span&gt;
&lt;span class=&quot;badge bg-warning mt-2 me-1&quot;&gt;Warning&lt;/span&gt;
&lt;span class=&quot;badge bg-info mt-2 me-1&quot;&gt;Info&lt;/span&gt;
&lt;span class=&quot;badge bg-light mt-2 me-1&quot;&gt;Light&lt;/span&gt;
&lt;span class=&quot;badge bg-dark mt-2 me-1&quot;&gt;Dark&lt;/span&gt;

&lt;h5 class=&quot;card-title mt-4&quot;&gt;Pill badges&lt;/h5&gt;
&lt;p class=&quot;mb-0&quot;&gt;Use the &lt;code&gt;.badge-pill&lt;/code&gt; modifier class to make badges more rounded (with a larger &lt;code&gt;border-radius&lt;/code&gt; and additional horizontal &lt;code&gt;padding&lt;/code&gt;). Useful if you miss the badges from v3.&lt;/p&gt;
&lt;span class=&quot;badge bg-primary mt-2 me-1&quot;&gt;Primary&lt;/span&gt;
&lt;span class=&quot;badge bg-secondary mt-2 me-1&quot;&gt;Secondary&lt;/span&gt;
&lt;span class=&quot;badge bg-success mt-2 me-1&quot;&gt;Success&lt;/span&gt;
&lt;span class=&quot;badge bg-danger mt-2 me-1&quot;&gt;Danger&lt;/span&gt;
&lt;span class=&quot;badge bg-warning mt-2 me-1&quot;&gt;Warning&lt;/span&gt;
&lt;span class=&quot;badge bg-info mt-2 me-1&quot;&gt;Info&lt;/span&gt;
&lt;span class=&quot;badge bg-light mt-2 me-1&quot;&gt;Light&lt;/span&gt;
&lt;span class=&quot;badge bg-dark mt-2 me-1&quot;&gt;Dark&lt;/span&gt;

&lt;h5 class=&quot;card-title mt-4&quot;&gt;Links&lt;/h5&gt;
&lt;p class=&quot;mb-0&quot;&gt;Using the contextual &lt;code&gt;.badge-*&lt;/code&gt; classes on an &lt;code&gt;&amp;lt;a&amp;gt;&lt;/code&gt; element quickly provide &lt;em&gt;actionable&lt;/em&gt; badges with hover and focus states.&lt;/p&gt;
&lt;span class=&quot;badge bg-primary mt-2 me-1&quot;&gt;Primary&lt;/span&gt;
&lt;span class=&quot;badge bg-secondary mt-2 me-1&quot;&gt;Secondary&lt;/span&gt;
&lt;span class=&quot;badge bg-success mt-2 me-1&quot;&gt;Success&lt;/span&gt;
&lt;span class=&quot;badge bg-danger mt-2 me-1&quot;&gt;Danger&lt;/span&gt;
&lt;span class=&quot;badge bg-warning mt-2 me-1&quot;&gt;Warning&lt;/span&gt;
&lt;span class=&quot;badge bg-info mt-2 me-1&quot;&gt;Info&lt;/span&gt;
&lt;span class=&quot;badge bg-light mt-2 me-1&quot;&gt;Light&lt;/span&gt;
&lt;span class=&quot;badge bg-dark mt-2 me-1&quot;&gt;Dark&lt;/span&gt;
</code></pre>
                </kbd>
              </div>
            </collapse-content>
            <span class="badge bg-primary mt-2 me-1">Primary</span>
            <span class="badge bg-secondary mt-2 me-1">Secondary</span>
            <span class="badge bg-success mt-2 me-1">Success</span>
            <span class="badge bg-danger mt-2 me-1">Danger</span>
            <span class="badge bg-warning mt-2 me-1">Warning</span>
            <span class="badge bg-info mt-2 me-1">Info</span>
            <span class="badge bg-light mt-2 me-1">Light</span>
            <span class="badge bg-dark mt-2 me-1">Dark</span>
            <h5 class="card-title mt-4">Pill badges</h5>
            <p class="mb-0">Use the <code>.badge-pill</code> modifier class to make badges more rounded (with a larger <code>border-radius</code> and additional horizontal <code>padding</code>). Useful if you miss the badges from v3.</p>
            <span class="badge bg-primary mt-2 me-1">Primary</span>
            <span class="badge bg-secondary mt-2 me-1">Secondary</span>
            <span class="badge bg-success mt-2 me-1">Success</span>
            <span class="badge bg-danger mt-2 me-1">Danger</span>
            <span class="badge bg-warning mt-2 me-1">Warning</span>
            <span class="badge bg-info mt-2 me-1">Info</span>
            <span class="badge bg-light mt-2 me-1">Light</span>
            <span class="badge bg-dark mt-2 me-1">Dark</span>
            <h5 class="card-title mt-4">Links</h5>
            <p class="mb-0">Using the contextual <code>.badge-*</code> classes on an <code>&lt;a&gt;</code> element quickly provide <em>actionable</em> badges with hover and focus states.</p>
            <span class="badge bg-primary mt-2 me-1">Primary</span>
            <span class="badge bg-secondary mt-2 me-1">Secondary</span>
            <span class="badge bg-success mt-2 me-1">Success</span>
            <span class="badge bg-danger mt-2 me-1">Danger</span>
            <span class="badge bg-warning mt-2 me-1">Warning</span>
            <span class="badge bg-info mt-2 me-1">Info</span>
            <span class="badge bg-light mt-2 me-1">Light</span>
            <span class="badge bg-dark mt-2 me-1">Dark</span>

          </template>
        </iq-card>
        <iq-card>
          <template v-slot:headerTitle>
            <h4 class="card-title">Contextual variations Border</h4>
          </template>
          <template v-slot:headerAction>
          <collapse className="text-primary float-right"  data-bs-toggle="collapse" collapseTarget="example-collapse5" ariaControls="example-collapse5">
            <i class="ri-code-s-slash-line" />
          </collapse>
          </template>
          <template v-slot:body>
            <p class="mb-0">Add any of the below mentioned modifier classes to change the appearance of a badge.</p>
            <collapse-content id="example-collapse5" className="mb-2">
              <div class="card">
                <kbd class="bg-dark">
                  <pre class="text-white" id="contextual-variations-border">
                    <code>
&lt;span class=&quot;badge border border-primary text-primary mt-2 me-1&quot;&gt;Primary&lt;/span&gt;
&lt;span class=&quot;badge border border-secondary text-secondary mt-2 me-1&quot;&gt;Secondary&lt;/span&gt;
&lt;span class=&quot;badge border border-success text-success mt-2 me-1&quot;&gt;Success&lt;/span&gt;
&lt;span class=&quot;badge border border-danger text-danger mt-2 me-1&quot;&gt;Danger&lt;/span&gt;
&lt;span class=&quot;badge border border-warning text-warning mt-2 me-1&quot;&gt;Warning&lt;/span&gt;
&lt;span class=&quot;badge border border-info text-info mt-2 me-1&quot;&gt;Info&lt;/span&gt;
&lt;span class=&quot;badge border border-light text-light mt-2 me-1&quot;&gt;Light&lt;/span&gt;
&lt;span class=&quot;badge border border-dark text-dark mt-2 me-1&quot;&gt;Dark&lt;/span&gt;

&lt;h5 class=&quot;card-title mt-4&quot;&gt;Pill badges&lt;/h5&gt;
&lt;p class=&quot;mb-0&quot;&gt;Use the &lt;code&gt;.badge-pill&lt;/code&gt; modifier class to make badges more rounded (with a larger &lt;code&gt;border-radius&lt;/code&gt; and additional horizontal &lt;code&gt;padding&lt;/code&gt;). Useful if you miss the badges from v3.&lt;/p&gt;
&lt;span class=&quot;badge border border-primary text-primary mt-2 me-1&quot;&gt;Primary&lt;/span&gt;
&lt;span class=&quot;badge border border-secondary text-secondary mt-2 me-1&quot;&gt;Secondary&lt;/span&gt;
&lt;span class=&quot;badge border border-success text-success mt-2 me-1&quot;&gt;Success&lt;/span&gt;
&lt;span class=&quot;badge border border-danger text-danger mt-2 me-1&quot;&gt;Danger&lt;/span&gt;
&lt;span class=&quot;badge border border-warning text-warning mt-2 me-1&quot;&gt;Warning&lt;/span&gt;
&lt;span class=&quot;badge border border-info text-info mt-2 me-1&quot;&gt;Info&lt;/span&gt;
&lt;span class=&quot;badge border border-light text-light mt-2 me-1&quot;&gt;Light&lt;/span&gt;
&lt;span class=&quot;badge border border-dark text-dark mt-2 me-1&quot;&gt;Dark&lt;/span&gt;

&lt;h5 class=&quot;card-title mt-4&quot;&gt;Links&lt;/h5&gt;
&lt;p class=&quot;mb-0&quot;&gt;Using the contextual &lt;code&gt;.badge-*&lt;/code&gt; classes on an &lt;code&gt;&amp;lt;a&amp;gt;&lt;/code&gt; element quickly provide &lt;em&gt;actionable&lt;/em&gt; badges with hover and focus states.&lt;/p&gt;
&lt;span class=&quot;badge border border-primary text-primary mt-2 me-1&quot;&gt;Primary&lt;/span&gt;
&lt;span class=&quot;badge border border-secondary text-secondary mt-2 me-1&quot;&gt;Secondary&lt;/span&gt;
&lt;span class=&quot;badge border border-success text-success mt-2 me-1&quot;&gt;Success&lt;/span&gt;
&lt;span class=&quot;badge border border-danger text-danger mt-2 me-1&quot;&gt;Danger&lt;/span&gt;
&lt;span class=&quot;badge border border-warning text-warning mt-2 me-1&quot;&gt;Warning&lt;/span&gt;
&lt;span class=&quot;badge border border-info text-info mt-2 me-1&quot;&gt;Info&lt;/span&gt;
&lt;span class=&quot;badge border border-light text-light mt-2 me-1&quot;&gt;Light&lt;/span&gt;
&lt;span class=&quot;badge border border-dark text-dark mt-2 me-1&quot;&gt;Dark&lt;/span&gt;
</code></pre>
                </kbd>
              </div>
            </collapse-content>
            <span class="badge border border-primary text-primary mt-2 me-1">Primary</span>
            <span class="badge border border-secondary text-secondary mt-2 me-1">Secondary</span>
            <span class="badge border border-success text-success mt-2 me-1">Success</span>
            <span class="badge border border-danger text-danger mt-2 me-1">Danger</span>
            <span class="badge border border-warning text-warning mt-2 me-1">Warning</span>
            <span class="badge border border-info text-info mt-2 me-1">Info</span>
            <span class="badge border border-light text-light mt-2 me-1">Light</span>
            <span class="badge border border-dark text-dark mt-2 me-1">Dark</span>
            <h5 class="card-title mt-4">Pill badges</h5>
            <p class="mb-0">Use the <code>.badge-pill</code> modifier class to make badges more rounded (with a larger <code>border-radius</code> and additional horizontal <code>padding</code>). Useful if you miss the badges from v3.</p>
            <span class="badge border border-primary text-primary mt-2 me-1">Primary</span>
            <span class="badge border border-secondary text-secondary mt-2 me-1">Secondary</span>
            <span class="badge border border-success text-success mt-2 me-1">Success</span>
            <span class="badge border border-danger text-danger mt-2 me-1">Danger</span>
            <span class="badge border border-warning text-warning mt-2 me-1">Warning</span>
            <span class="badge border border-info text-info mt-2 me-1">Info</span>
            <span class="badge border border-light text-light mt-2 me-1">Light</span>
            <span class="badge border border-dark text-dark mt-2 me-1">Dark</span>
            <h5 class="card-title mt-4">Links</h5>
            <p class="mb-0">Using the contextual <code>.badge-*</code> classes on an <code>&lt;a&gt;</code> element quickly provide <em>actionable</em> badges with hover and focus states.</p>
            <span class="badge border border-primary text-primary mt-2 me-1">Primary</span>
            <span class="badge border border-secondary text-secondary mt-2 me-1">Secondary</span>
            <span class="badge border border-success text-success mt-2 me-1">Success</span>
            <span class="badge border border-danger text-danger mt-2 me-1">Danger</span>
            <span class="badge border border-warning text-warning mt-2 me-1">Warning</span>
            <span class="badge border border-info text-info mt-2 me-1">Info</span>
            <span class="badge border border-light text-light mt-2 me-1">Light</span>
            <span class="badge border border-dark text-dark mt-2 me-1">Dark</span>
          </template>
        </iq-card>
      </div>
    </div>
</template>
<script>
// import { socialvue } from '../../config/pluginInit'

export default {
  name: 'UiBadges',
  mounted () {
    // socialvue.index()
  }
}
</script>
