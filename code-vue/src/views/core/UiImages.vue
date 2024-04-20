<template>
    <div class="row">
      <div class="col-sm-12">
          <div class="card position-relative inner-page-bg bg-primary" style="height: 150px;">
            <div class="inner-page-title">
                <h3 class="text-white">Images Page</h3>
                <p class="text-white">lorem ipsum</p>
            </div>
          </div>
      </div>
      <div class="col-lg-6">
        <iq-card>
          <template v-slot:headerTitle>
            <h4 class="card-title">Responsive images</h4>
          </template>
          <template v-slot:headerAction>
            <collapse class="text-primary float-right" href="#example-collapse" data-bs-toggle="collapse">
              <i class="ri-code-s-slash-line" />
            </collapse>
          </template>
          <template v-slot:body>
            <p>Images in Bootstrap are made responsive with <code>.img-fluid</code>. <code>max-width: 100%;</code> and <code>height: auto;</code> are applied to the image so that it scales with the parent element.</p>
            <collapse-content id="example-collapse" class="mb-2">
              <div class="card">
                <kbd class="bg-dark">
                  <pre class="text-white" id="image-1">
                    <code>
&lt;img src=&quot;@/assets/images/small/img-1.jpg&quot; class=&quot;img-fluid&quot; alt=&quot;Responsive image&quot;&gt;
</code></pre>
                </kbd>
              </div>
            </collapse-content>
            <img src="@/assets/images/small/img-1.jpg" class="img-fluid" alt="Responsive image">
          </template>
        </iq-card>
        <iq-card>
          <template v-slot:headerTitle>
            <h4 class="card-title">Equal-width multi-row</h4>
          </template>
          <template v-slot:headerAction>
            <collapse class="text-primary float-right" href="#example-collapse1" data-bs-toggle="collapse">
              <i class="ri-code-s-slash-line" />
            </collapse>
          </template>
          <template v-slot:body>
            <p>Create equal-width columns that span multiple rows by inserting a <code>.w-100</code> where you want the columns to break to a new line. Make the breaks responsive by mixing the <code>.w-100</code> with some <a href="/docs/4.3/utilities/display/">responsive display utilities</a>.</p>
            <collapse-content id="example-collapse1" class="mb-2">
              <div class="card">
                <kbd class="bg-dark">
                  <pre class="text-white" id="image-2">
                    <code>
&lt;div class=&quot;d-flex align-items-center&quot;&gt;
  &lt;img src=&quot;@/assets/images/page-img/15.jpg&quot; class=&quot;img-fluid avatar-70 me-3&quot; alt=&quot;#&quot;&gt;
  &lt;div class=&quot;&quot;&gt;
    &lt;h5 class=&quot;mt-0&quot;&gt;Media heading&lt;/h5&gt;
    Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
  &lt;/div&gt;
&lt;/div&gt;
&lt;div class=&quot;d-flex&quot;&gt;
  &lt;div class=&quot;flex-shrink-0&quot;&gt;
    &lt;img src=&quot;@/assets/images/page-img/16.jpg&quot; class=&quot;img-fluid avatar-70 me-3&quot; alt=&quot;#&quot;&gt;
  &lt;/div&gt;
  &lt;div class=&quot;flex-grow-1&quot;&gt;
    &lt;h5 class=&quot;mt-0&quot;&gt;Media heading&lt;/h5&gt;
    Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
    &lt;div class=&quot;d-flex mt-3&quot;&gt;
      &lt;a class=&quot;me-3&quot; href=&quot;#&quot;&gt;
        &lt;img src=&quot;@/assets/images/page-img/17.jpg&quot; class=&quot;avatar-70&quot; alt=&quot;#&quot;&gt;
      &lt;/a&gt;
      &lt;div class=&quot;flex-grow-1&quot;&gt;
        &lt;h5 class=&quot;mt-0&quot;&gt;Media heading&lt;/h5&gt;
        Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
      &lt;/div&gt;
    &lt;/div&gt;
  &lt;/div&gt;
&lt;/div&gt;
</code></pre>
                </kbd>
              </div>
            </collapse-content>
            <div class="d-flex align-items-center">
              <img src="@/assets/images/page-img/15.jpg" class="img-fluid avatar-70 me-3" alt="#">
              <div class="">
                  <h5 class="mt-0">Media heading</h5>
                  Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
              </div>
            </div>
            <div class="d-flex">
              <div class="flex-shrink-0">
                  <img src="@/assets/images/page-img/16.jpg" class="img-fluid avatar-70 me-3" alt="#">
              </div>
              <div class="flex-grow-1">
                  <h5 class="mt-0">Media heading</h5>
                  Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.

                  <div class="d-flex mt-3">
                    <a class="me-3" href="#">
                    <img src="@/assets/images/page-img/17.jpg" class="avatar-70" alt="#">
                    </a>
                    <div class="flex-grow-1">
                        <h5 class="mt-0">Media heading</h5>
                        Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
                    </div>
                  </div>
              </div>
            </div>
          </template>
        </iq-card>
        <iq-card>
          <template v-slot:headerTitle>
            <h4 class="card-title">Order</h4>
          </template>
          <template v-slot:headerAction>
            <collapse class="text-primary float-right" href="#example-collapse2" data-bs-toggle="collapse">
              <i class="ri-code-s-slash-line" />
            </collapse>
          </template>
          <template v-slot:body>
            <p>Change the order of content in media objects by modifying the HTML itself, or by adding some custom flexbox CSS to set the <code>order</code> property (to an integer of your choosing).</p>
            <collapse-content id="example-collapse2" class="mb-2">
              <div class="card">
                <kbd class="bg-dark">
                  <pre class="text-white" id="images-3">
                    <code>
&lt;div class=&quot;d-flex align-items-center mb-5&quot;&gt;
  &lt;div class=&quot;&quot;&gt;
    &lt;h5 class=&quot;mt-0 mb-1&quot;&gt;Media object&lt;/h5&gt;
    Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
  &lt;/div&gt;
  &lt;img src=&quot;@/assets/images/page-img/18.jpg&quot; class=&quot;ms-3 img-fluid avatar-70&quot; alt=&quot;#&quot;&gt;
&lt;/div&gt;
&lt;div class=&quot;d-flex align-items-center mb-5&quot;&gt;
  &lt;div class=&quot;&quot;&gt;
    &lt;h5 class=&quot;mt-0 mb-1&quot;&gt;Center-aligned media&lt;/h5&gt;
    Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
  &lt;/div&gt;
  &lt;img src=&quot;@/assets/images/page-img/19.jpg&quot; class=&quot;align-self-center ms-3 img-fluid avatar-70&quot; alt=&quot;#&quot;&gt;
&lt;/div&gt;
&lt;div class=&quot;d-flex align-items-center&quot;&gt;
  &lt;div class=&quot;&quot;&gt;
    &lt;h5 class=&quot;mt-0 mb-1&quot;&gt;Bottom-aligned media&lt;/h5&gt;
    Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
  &lt;/div&gt;
  &lt;img src=&quot;@/assets/images/page-img/20.jpg&quot; class=&quot;align-self-end ms-3 img-fluid avatar-70&quot; alt=&quot;#&quot;&gt;
&lt;/div&gt;
</code></pre>
                </kbd>
              </div>
            </collapse-content>
            <div class="d-flex align-items-center mb-5">
              <div class="">
                  <h5 class="mt-0 mb-1">Media object</h5>
                  Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
              </div>
              <img src="@/assets/images/page-img/18.jpg" class="ms-3 img-fluid avatar-70" alt="#">
            </div>
            <div class="d-flex align-items-center mb-5">
              <div class="">
                  <h5 class="mt-0 mb-1">Center-aligned media</h5>
                  Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
              </div>
              <img src="@/assets/images/page-img/19.jpg" class="align-self-center ms-3 img-fluid avatar-70" alt="#">
            </div>
            <div class="d-flex align-items-center">
              <div class="">
                  <h5 class="mt-0 mb-1">Bottom-aligned media</h5>
                  Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
              </div>
              <img src="@/assets/images/page-img/20.jpg" class="align-self-end ms-3 img-fluid avatar-70" alt="#">
            </div>
          </template>
        </iq-card>
      </div>
      <div class="col-lg-6 col-sm-12">
        <iq-card>
          <template v-slot:headerTitle>
            <h4 class="card-title">Image thumbnails</h4>
          </template>
          <template v-slot:headerAction>
            <collapse class="text-primary float-right" href="#example-collapse3" data-bs-toggle="collapse">
              <i class="ri-code-s-slash-line" />
            </collapse>
          </template>
          <template v-slot:body>
            <p>In addition to our <a href="/docs/4.3/utilities/borders/">border-radius utilities</a>, you can use <code>.img-thumbnail</code> to give an image a rounded 1px border appearance.</p>
            <collapse-content id="example-collapse3" class="mb-2">
              <div class="card">
                <kbd class="bg-dark">
                  <pre class="text-white" id="image-4">
                    <code>
&lt;img src=&quot;@/assets/images/page-img/10.jpg&quot; class=&quot;img-thumbnail&quot; alt=&quot;Responsive image&quot;&gt;
&lt;img src=&quot;@/assets/images/page-img/11.jpg&quot; class=&quot;rounded ms-3&quot; alt=&quot;Responsive image&quot;&gt;
&lt;img src=&quot;@/assets/images/page-img/12.jpg&quot; class=&quot;rounded-circle ms-3 mt-3&quot; alt=&quot;Responsive image&quot;&gt;
</code></pre>
                </kbd>
              </div>
            </collapse-content>
            <img src="@/assets/images/page-img/10.jpg" class="img-thumbnail" alt="Responsive image">
            <img src="@/assets/images/page-img/11.jpg" class="rounded ms-3" alt="Responsive image">
            <img src="@/assets/images/page-img/12.jpg" class="rounded-circle ms-3 mt-3" alt="Responsive image">
          </template>
        </iq-card>
        <iq-card>
          <template v-slot:headerTitle>
            <h4 class="card-title">Image thumbnails</h4>
          </template>
          <template v-slot:headerAction>
            <collapse class="text-primary float-right" href="#example-collapse4" data-bs-toggle="collapse">
              <i class="ri-code-s-slash-line" />
            </collapse>
          </template>
          <template v-slot:body>
            <p>In addition to our <a href="/docs/4.3/utilities/borders/">border-radius utilities</a>, you can use <code>.img-thumbnail</code> to give an image a rounded 1px border appearance.</p>
            <collapse-content id="example-collapse4" class="mb-2">
              <div class="card">
                <kbd class="bg-dark">
                  <pre class="text-white" id="image-5">
                    <code>
&lt;img src=&quot;@/assets/images/page-img/13.jpg&quot; class=&quot;&quot; alt=&quot;Responsive image&quot;&gt;
&lt;img src=&quot;@/assets/images/page-img/14.jpg&quot; alt=&quot;Responsive image&quot;&gt;
</code></pre>
                </kbd>
              </div>
            </collapse-content>
            <div class="d-flex align-items-center justify-content-between">
              <img src="@/assets/images/page-img/13.jpg" class="" alt="Responsive image">
              <img src="@/assets/images/page-img/14.jpg" alt="Responsive image">
            </div>
          </template>
        </iq-card>
        <iq-card>
          <template v-slot:headerTitle>
            <h4 class="card-title">Media object</h4>
          </template>
          <template v-slot:headerAction>
            <collapse class="text-primary float-right" href="#example-collapse5" data-bs-toggle="collapse">
              <i class="ri-code-s-slash-line" />
            </collapse>
          </template>
          <template v-slot:body>
            <p>The images or other media can be aligned top, middle, or bottom. The default is top aligned.</p>
            <collapse-content id="example-collapse5" class="mb-2">
              <div class="card">
                <kbd class="bg-dark">
                  <pre class="text-white" id="image-6">
                    <code>
&lt;div class=&quot;d-flex align-items-center mb-4&quot;&gt;
  &lt;img src=&quot;@/assets/images/page-img/21.jpg&quot; class=&quot;align-self-start me-3 img-fluid avatar-70&quot; alt=&quot;#&quot;&gt;
  &lt;div class=&quot;&quot;&gt;
    &lt;h5 class=&quot;mt-0&quot;&gt;Top-aligned media&lt;/h5&gt;
    &lt;p&gt;Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.&lt;/p&gt;
  &lt;/div&gt;
&lt;/div&gt;
&lt;div class=&quot;d-flex align-items-center mb-4&quot;&gt;
  &lt;img src=&quot;@/assets/images/page-img/22.jpg&quot; class=&quot;align-self-center me-3 img-fluid avatar-70&quot; alt=&quot;#&quot;&gt;
  &lt;div class=&quot;&quot;&gt;
    &lt;h5 class=&quot;mt-0&quot;&gt;Center-aligned media&lt;/h5&gt;
    &lt;p&gt;Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.&lt;/p&gt;
  &lt;/div&gt;
&lt;/div&gt;
&lt;div class=&quot;d-flex align-items-center&quot;&gt;
  &lt;img src=&quot;@/assets/images/page-img/23.jpg&quot; class=&quot;align-self-end me-3 img-fluid avatar-70&quot; alt=&quot;#&quot;&gt; &lt;div class=&quot;&quot;&gt;
  &lt;h5 class=&quot;mt-0&quot;&gt;Bottom-aligned media&lt;/h5&gt;
  &lt;p class=&quot;mb-0&quot;&gt;Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.&lt;/p&gt;
&lt;/div&gt;
&lt;/div&gt;
</code></pre>
                </kbd>
              </div>
            </collapse-content>
            <div class="d-flex align-items-center mb-4">
              <img src="@/assets/images/page-img/21.jpg" class="align-self-start me-3 img-fluid avatar-70" alt="#">
              <div class="">
                  <h5 class="mt-0">Top-aligned media</h5>
                  <p>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.</p>
              </div>
            </div>
            <div class="d-flex align-items-center mb-4">
              <img src="@/assets/images/page-img/22.jpg" class="align-self-center me-3 img-fluid avatar-70" alt="#">
              <div class="">
                  <h5 class="mt-0">Center-aligned media</h5>
                  <p>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.</p>
              </div>
            </div>
            <div class="d-flex align-items-center">
              <img src="@/assets/images/page-img/23.jpg" class="align-self-end me-3 img-fluid avatar-70" alt="#">
              <div class="">
                  <h5 class="mt-0">Bottom-aligned media</h5>
                  <p class="mb-0">Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.</p>
              </div>
            </div>
          </template>
        </iq-card>
        <iq-card>
          <template v-slot:headerTitle>
            <h4 class="card-title">Media list</h4>
          </template>
          <template v-slot:headerAction>
            <collapse class="text-primary float-right" href="#example-collapse6" data-bs-toggle="collapse">
              <i class="ri-code-s-slash-line" />
            </collapse>
          </template>
          <template v-slot:body>
            <p>Because the media object has so few structural requirements, you can also use these classes on list HTML elements. On your <code>&lt;ul&gt;</code> or <code>&lt;ol&gt;</code>, add the <code>.list-unstyled</code> to remove any browser default list styles, and then apply <code>.media</code> to your <code>&lt;li&gt;</code>s. As always, use spacing utilities wherever needed to fine tune.</p>
            <collapse-content id="example-collapse6" class="mb-2">
              <div class="card">
                <kbd class="bg-dark">
                  <pre class="text-white" id="image-7">
                    <code>
&lt;ul class=&quot;list-unstyled&quot;&gt;
  &lt;li class=&quot;d-flex align-items-center&quot;&gt;
    &lt;img src=&quot;@/assets/images/page-img/24.jpg&quot; class=&quot;me-3 img-fluid avatar-70&quot; alt=&quot;#&quot;&gt;
    &lt;div class=&quot;&quot;&gt;
      &lt;h5 class=&quot;mt-0 mb-1&quot;&gt;List-based media object&lt;/h5&gt;
      Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
    &lt;/div&gt;
  &lt;/li&gt;
  &lt;li class=&quot;d-flex align-items-center my-4&quot;&gt;
    &lt;img src=&quot;@/assets/images/page-img/15.jpg&quot; class=&quot;me-3 img-fluid avatar-70&quot; alt=&quot;#&quot;&gt;
    &lt;div class=&quot;&quot;&gt;
      &lt;h5 class=&quot;mt-0 mb-1&quot;&gt;List-based media object&lt;/h5&gt;
      Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
    &lt;/div&gt;
  &lt;/li&gt;
  &lt;li class=&quot;d-flex align-items-center&quot;&gt;
    &lt;img src=&quot;@/assets/images/page-img/16.jpg&quot; class=&quot;me-3 img-fluid avatar-70&quot; alt=&quot;#&quot;&gt;
    &lt;div class=&quot;&quot;&gt;
      &lt;h5 class=&quot;mt-0 mb-1&quot;&gt;List-based media object&lt;/h5&gt;
      Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
    &lt;/div&gt;
  &lt;/li&gt;
&lt;/ul&gt;
</code></pre>
                </kbd>
              </div>
            </collapse-content>
            <ul class="list-unstyled">
              <li class="d-flex align-items-center">
                <img src="@/assets/images/page-img/24.jpg" class="me-3 img-fluid avatar-70" alt="#">
                <div class="">
                  <h5 class="mt-0 mb-1">List-based media object</h5>
                  Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
                </div>
              </li>
              <li class="d-flex align-items-center my-4">
                <img src="@/assets/images/page-img/15.jpg" class="me-3 img-fluid avatar-70" alt="#">
                <div class="">
                  <h5 class="mt-0 mb-1">List-based media object</h5>
                  Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
                </div>
              </li>
              <li class="d-flex align-items-center">
                <img src="@/assets/images/page-img/16.jpg" class="me-3 img-fluid avatar-70" alt="#">
                <div class="">
                  <h5 class="mt-0 mb-1">List-based media object</h5>
                  Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
                </div>
              </li>
            </ul>
          </template>
        </iq-card>
      </div>
    </div>
</template>
<script>
// import { socialvue } from '../../config/pluginInit'
export default {
  name: 'UiImages',
  mounted () {
    // socialvue.index()
  }
}
</script>
