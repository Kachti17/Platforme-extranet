<template>
    <div class="row">
      <div class="col-sm-12">
          <div class="card position-relative inner-page-bg bg-primary" style="height: 150px;">
            <div class="inner-page-title">
                <h3 class="text-white">Video Page</h3>
                <p class="text-white">lorem ipsum</p>
            </div>
          </div>
      </div>
      <div class="col-lg-6 col-sm-12">
        <iq-card>
          <template v-slot:headerTitle>
            <h4 class="card-title">Embeds Video</h4>
          </template>
          <template v-slot:headerAction>
            <collapse className="text-primary float-right"  data-bs-toggle="collapse" collapseTarget="example-collapse" ariaControls="example-collapse">
              <i class="ri-code-s-slash-line" />
            </collapse>
          </template>
          <template v-slot:body>
            <p>Wrap any embed like an <code class="highlighter-rouge">&lt;iframe&gt;</code> in a parent element with <code class="highlighter-rouge">.embed-responsive</code> and an aspect ratio. The <code class="highlighter-rouge">.embed-responsive-item</code> isn’t strictly required, but we encourage it.</p>
            <collapse-content id="example-collapse" className="mb-2">
              <div class="card">
                <kbd class="bg-dark">
                  <pre class="text-white" id="embeds-video">
                    <code>
&lt;div class=&quot;ratio ratio-16y9&quot;&gt;
  &lt;iframe src=&quot;https://www.youtube.com/embed/zpOULjyy-n8?rel=0&quot;
  title=&quot;YouTube video&quot;
  allowfullscreen&gt;&lt;/iframe&gt;
&lt;/div&gt;
</code></pre>
                </kbd>
              </div>
            </collapse-content>
            <div class="ratio ratio-16y9">
              <iframe src="https://www.youtube.com/embed/zpOULjyy-n8?rel=0" title="YouTube video" allowfullscreen></iframe>
            </div>
          </template>
        </iq-card>
        <iq-card>
          <template v-slot:headerTitle>
            <h4 class="card-title">Responsive Aspect ratios 4:3</h4>
          </template>
          <template v-slot:headerAction>
            <collapse className="text-primary float-right"  data-bs-toggle="collapse" collapseTarget="example-collapse1" ariaControls="example-collapse1">
              <i class="ri-code-s-slash-line" />
            </collapse>
          </template>
          <template v-slot:body>
            <p>Progress components are built with two HTML elements, some CSS to set the width, and a few attributes.</p>
            <collapse-content id="example-collapse1" className="mb-2">
              <div class="card">
                <kbd class="bg-dark">
                  <pre class="text-white" id="ratios-1">
                    <code>
&lt;div class=&quot;ratio ratio-4x3&quot;&gt;
  &lt;iframe src=&quot;https://www.youtube.com/embed/zpOULjyy-n8?rel=0&quot;
  title=&quot;YouTube video&quot;
  allowfullscreen&gt;&lt;/iframe&gt;
&lt;/div&gt;
</code></pre>
                </kbd>
              </div>
            </collapse-content>
            <div class="ratio ratio-4x3">
              <iframe src="https://www.youtube.com/embed/zpOULjyy-n8?rel=0" title="YouTube video" allowfullscreen></iframe>
            </div>
          </template>
        </iq-card>
      </div>
      <div class="col-lg-6 col-sm-12">
        <iq-card>
          <template v-slot:headerTitle>
            <h4 class="card-title">Responsive Aspect ratios 21:9</h4>
          </template>
          <template v-slot:headerAction>
            <collapse className="text-primary float-right"  data-bs-toggle="collapse" collapseTarget="example-collapse2" ariaControls="example-collapse2">
              <i class="ri-code-s-slash-line" />
            </collapse>
          </template>
          <template v-slot:body>
            <p>Progress components are built with two HTML elements, some CSS to set the width, and a few attributes.</p>
            <collapse-content id="example-collapse2" className="mb-2">
              <div class="card">
                <kbd class="bg-dark">
                  <pre class="text-white" id="ratios-2">
                    <code>
&lt;div class=&quot;ratio ratio-21x9&quot;&gt;
  &lt;iframe src=&quot;https://www.youtube.com/embed/zpOULjyy-n8?rel=0&quot;
  title=&quot;YouTube video&quot;
  allowfullscreen&gt;&lt;/iframe&gt;
&lt;/div&gt;
</code></pre>
                </kbd>
              </div>
            </collapse-content>
            <div class="ratio ratio-21x9">
              <iframe src="https://www.youtube.com/embed/zpOULjyy-n8?rel=0" title="YouTube video" allowfullscreen></iframe>
            </div>
          </template>
        </iq-card>
        <iq-card>
          <template v-slot:headerTitle>
            <h4 class="card-title">Responsive Aspect ratios 1:1</h4>
          </template>
          <template v-slot:headerAction>
            <collapse className="text-primary float-right"  data-bs-toggle="collapse" collapseTarget="example-collapse3" ariaControls="example-collapse3">
              <i class="ri-code-s-slash-line" />
            </collapse>
          </template>
          <template v-slot:body>
            <p>Progress components are built with two HTML elements, some CSS to set the width, and a few attributes.</p>
            <collapse-content id="example-collapse3" className="mb-2">
              <div class="card">
                <kbd class="bg-dark">
                  <pre class="text-white" id="ratios-3">
                    <code>
&lt;div class=&quot;ratio ratio-1x1&quot;&gt;
  &lt;iframe src=&quot;https://www.youtube.com/embed/zpOULjyy-n8?rel=0&quot;
  title=&quot;YouTube video&quot;
  allowfullscreen&gt;&lt;/iframe&gt;
&lt;/div&gt;
</code></pre>
                </kbd>
              </div>
            </collapse-content>
            <div class="ratio ratio-1x1">
              <iframe src="https://www.youtube.com/embed/zpOULjyy-n8?rel=0" title="YouTube video" allowfullscreen></iframe>
            </div>
          </template>
        </iq-card>
      </div>
    </div>
</template>
<script>
// import { socialvue } from '../../config/pluginInit'

export default {
  name: 'UiEmbedVideo',
  mounted () {
    // socialvue.index()
  }
}
</script>
