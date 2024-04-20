<template>
    <div class="row">
      <div class="col-sm-12">
        <div class="card position-relative inner-page-bg bg-primary" style="height: 150px;">
          <div class="inner-page-title">
            <h3 class="text-white">Pagination Page</h3>
            <p class="text-white">lorem ipsum</p>
          </div>
        </div>
      </div>
      <div class="col-lg-6">
        <iq-card>
          <template v-slot:headerTitle>
            <h4 class="card-title">Pagination Examples</h4>
          </template>
          <template v-slot:headerAction>
            <collapse class="text-primary float-right" href="#example-collapse" data-bs-toggle="collapse">
              <i class="ri-code-s-slash-line" />
            </collapse>
          </template>
          <template v-slot:body>
            <p>In addition, as pages likely have more than one such navigation section, it’s advisable to provide a descriptive <code>aria-label</code> for the <code>&lt;nav&gt;</code> to reflect its purpose. For example, if the pagination component is used to navigate between a set of search results, an appropriate label could be <code>aria-label="Search results pages"</code>.</p>
            <collapse-content id="example-collapse" class="mb-2">
              <div class="card">
                <kbd class="bg-dark">
                  <pre class="text-white" id="pagination-examples">
                    <code>
&lt;nav aria-label=&quot;Page navigation example&quot;&gt;
  &lt;ul class=&quot;pagination mb-0&quot;&gt;
    &lt;li class=&quot;page-item&quot;&gt;&lt;a class=&quot;page-link&quot; href=&quot;#&quot;&gt;Previous&lt;/a&gt;&lt;/li&gt;
    &lt;li class=&quot;page-item&quot;&gt;&lt;a class=&quot;page-link&quot; href=&quot;#&quot;&gt;1&lt;/a&gt;&lt;/li&gt;
    &lt;li class=&quot;page-item&quot;&gt;&lt;a class=&quot;page-link&quot; href=&quot;#&quot;&gt;2&lt;/a&gt;&lt;/li&gt;
    &lt;li class=&quot;page-item&quot;&gt;&lt;a class=&quot;page-link&quot; href=&quot;#&quot;&gt;3&lt;/a&gt;&lt;/li&gt;
    &lt;li class=&quot;page-item&quot;&gt;&lt;a class=&quot;page-link&quot; href=&quot;#&quot;&gt;Next&lt;/a&gt;&lt;/li&gt;
  &lt;/ul&gt;
&lt;/nav&gt;
</code></pre>
                </kbd>
              </div>
            </collapse-content>
            <nav aria-label="Page navigation example">
              <ul class="pagination mb-0">
                <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                <li class="page-item"><a class="page-link" href="#">1</a></li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item"><a class="page-link" href="#">Next</a></li>
              </ul>
            </nav>
          </template>
        </iq-card>
        <iq-card>
          <template v-slot:headerTitle>
            <h4 class="card-title">Disabled and active states</h4>
          </template>
          <template v-slot:headerAction>
            <collapse class="text-primary float-right" href="#example-collapse1" data-bs-toggle="collapse">
              <i class="ri-code-s-slash-line" />
            </collapse>
          </template>
          <template v-slot:body>
            <p>Pagination links are customizable for different circumstances. Use <code>disabled</code> for links that appear un-clickable and <code>.active</code> to indicate the current page.</p>
            <p>While the <code>disabled</code> prop uses <code>pointer-events: none</code> to <em>try</em> to disable the link functionality of <code>&lt;a&gt;</code>s, that CSS property is not yet standardized and doesn’t account for keyboard navigation. As such, you should always add <code>tabindex="-1"</code> on disabled links and use custom JavaScript to fully disable their functionality.</p>
            <collapse-content id="example-collapse1" class="mb-2">
              <div class="card">
                <kbd class="bg-dark">
                  <pre class="text-white" id="disabled-active-1">
                    <code>
&lt;nav aria-label=&quot;...&quot;&gt;
  &lt;ul class=&quot;pagination&quot;&gt;
    &lt;li class=&quot;page-item disabled&quot;&gt; &lt;a class=&quot;page-link&quot; href=&quot;#&quot; tabindex=&quot;-1&quot; aria-disabled=&quot;true&quot;&gt;Previous&lt;/a&gt; &lt;/li&gt;
    &lt;li class=&quot;page-item&quot;&gt;&lt;a class=&quot;page-link&quot; href=&quot;#&quot;&gt;1&lt;/a&gt;&lt;/li&gt;
    &lt;li class=&quot;page-item active&quot; aria-current=&quot;page&quot;&gt; &lt;a class=&quot;page-link&quot; href=&quot;#&quot;&gt;2 &lt;span class=&quot;sr-only&quot;&gt;(current)&lt;/span&gt;&lt;/a&gt; &lt;/li&gt;
    &lt;li class=&quot;page-item&quot;&gt;&lt;a class=&quot;page-link&quot; href=&quot;#&quot;&gt;3&lt;/a&gt;&lt;/li&gt; &lt;li class=&quot;page-item&quot;&gt; &lt;a class=&quot;page-link&quot; href=&quot;#&quot;&gt;Next&lt;/a&gt; &lt;/li&gt;
  &lt;/ul&gt;
&lt;/nav&gt;
&lt;p&gt;You can optionally swap out active or disabled anchors for &lt;code&gt;&amp;lt;span&amp;gt;&lt;/code&gt;, or omit the anchor in the case of the prev/next arrows, to remove click functionality and prevent keyboard focus while retaining intended styles.&lt;/p&gt;
&lt;nav aria-label=&quot;...&quot;&gt;
  &lt;ul class=&quot;pagination&quot;&gt;
    &lt;li class=&quot;page-item disabled&quot;&gt; &lt;span class=&quot;page-link&quot;&gt;Previous&lt;/span&gt; &lt;/li&gt;
    &lt;li class=&quot;page-item&quot;&gt;&lt;a class=&quot;page-link&quot; href=&quot;#&quot;&gt;1&lt;/a&gt;&lt;/li&gt;
    &lt;li class=&quot;page-item active&quot; aria-current=&quot;page&quot;&gt; &lt;span class=&quot;page-link&quot;&gt; 2 &lt;span class=&quot;sr-only&quot;&gt;(current)&lt;/span&gt; &lt;/span&gt; &lt;/li&gt;
    &lt;li class=&quot;page-item&quot;&gt;&lt;a class=&quot;page-link&quot; href=&quot;#&quot;&gt;3&lt;/a&gt;&lt;/li&gt;
    &lt;li class=&quot;page-item&quot;&gt; &lt;a class=&quot;page-link&quot; href=&quot;#&quot;&gt;Next&lt;/a&gt; &lt;/li&gt;
  &lt;/ul&gt;
&lt;/nav&gt;
</code></pre>
                </kbd>
              </div>
            </collapse-content>
            <nav aria-label="...">
              <ul class="pagination">
                <li class="page-item disabled">
                  <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Previous</a>
                </li>
                <li class="page-item"><a class="page-link" href="#">1</a></li>
                <li class="page-item active" aria-current="page">
                  <a class="page-link" href="#">2 <span class="sr-only">(current)</span></a>
                </li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item">
                  <a class="page-link" href="#">Next</a>
                </li>
              </ul>
            </nav>
            <p>You can optionally swap out active or disabled anchors for <code>&lt;span&gt;</code>, or omit the anchor in the case of the prev/next arrows, to remove click functionality and prevent keyboard focus while retaining intended styles.</p>
            <nav aria-label="...">
              <ul class="pagination">
                <li class="page-item disabled">
                  <span class="page-link">Previous</span>
                </li>
                <li class="page-item"><a class="page-link" href="#">1</a></li>
                <li class="page-item active" aria-current="page">
                  <span class="page-link">
                  2
                  <span class="sr-only">(current)</span>
                  </span>
                </li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item">
                  <a class="page-link" href="#">Next</a>
                </li>
              </ul>
            </nav>
          </template>
        </iq-card>
        <iq-card>
          <template v-slot:headerTitle>
            <h4 class="card-title">Pagination With Color</h4>
          </template>
          <template v-slot:headerAction>
            <collapse class="text-primary float-right" href="#example-collapse2" data-bs-toggle="collapse">
              <i class="ri-code-s-slash-line" />
            </collapse>
          </template>
          <template v-slot:body>
            <p>In addition, as pages likely have more than one such navigation section, it’s advisable to provide a descriptive <code>aria-label</code> for the <code>&lt;nav&gt;</code> to reflect its purpose. For example, if the pagination component is used to navigate between a set of search results, an appropriate label could be <code>aria-label="Search results pages"</code>.</p>
            <collapse-content id="example-collapse2" class="mb-2">
              <div class="card">
                <kbd class="bg-dark">
                  <pre class="text-white" id="disabled-active-3">
                    <code>
&lt;nav aria-label=&quot;Page navigation example&quot;&gt;
  &lt;ul class=&quot;pagination&quot;&gt;
    &lt;li class=&quot;page-item&quot;&gt;&lt;a class=&quot;page-link border-primary bg-primary text-white&quot; href=&quot;#&quot;&gt;Previous&lt;/a&gt;&lt;/li&gt;
    &lt;li class=&quot;page-item&quot;&gt;&lt;a class=&quot;page-link border-primary bg-primary text-white&quot; href=&quot;#&quot;&gt;1&lt;/a&gt;&lt;/li&gt;
    &lt;li class=&quot;page-item&quot;&gt;&lt;a class=&quot;page-link border-primary bg-primary text-white&quot; href=&quot;#&quot;&gt;2&lt;/a&gt;&lt;/li&gt;
    &lt;li class=&quot;page-item&quot;&gt;&lt;a class=&quot;page-link border-primary bg-primary text-white&quot; href=&quot;#&quot;&gt;3&lt;/a&gt;&lt;/li&gt;
    &lt;li class=&quot;page-item&quot;&gt;&lt;a class=&quot;page-link border-primary bg-primary text-white&quot; href=&quot;#&quot;&gt;Next&lt;/a&gt;&lt;/li&gt;
  &lt;/ul&gt;
&lt;/nav&gt;
&lt;nav aria-label=&quot;Page navigation example&quot;&gt;
  &lt;ul class=&quot;pagination&quot;&gt;
    &lt;li class=&quot;page-item&quot;&gt;&lt;a class=&quot;page-link border-success bg-success text-white&quot; href=&quot;#&quot;&gt;Previous&lt;/a&gt;&lt;/li&gt;
    &lt;li class=&quot;page-item&quot;&gt;&lt;a class=&quot;page-link border-success bg-success text-white&quot; href=&quot;#&quot;&gt;1&lt;/a&gt;&lt;/li&gt;
    &lt;li class=&quot;page-item&quot;&gt;&lt;a class=&quot;page-link border-success bg-success text-white&quot; href=&quot;#&quot;&gt;2&lt;/a&gt;&lt;/li&gt;
    &lt;li class=&quot;page-item&quot;&gt;&lt;a class=&quot;page-link border-success bg-success text-white&quot; href=&quot;#&quot;&gt;3&lt;/a&gt;&lt;/li&gt;
    &lt;li class=&quot;page-item&quot;&gt;&lt;a class=&quot;page-link border-success bg-success text-white&quot; href=&quot;#&quot;&gt;Next&lt;/a&gt;&lt;/li&gt;
  &lt;/ul&gt;
&lt;/nav&gt;
&lt;nav aria-label=&quot;Page navigation example&quot;&gt;
  &lt;ul class=&quot;pagination mb-0 &quot;&gt;
    &lt;li class=&quot;page-item&quot;&gt;&lt;a class=&quot;page-link border-info bg-info text-white&quot; href=&quot;#&quot;&gt;Previous&lt;/a&gt;&lt;/li&gt;
    &lt;li class=&quot;page-item&quot;&gt;&lt;a class=&quot;page-link border-info bg-info text-white&quot; href=&quot;#&quot;&gt;1&lt;/a&gt;&lt;/li&gt;
    &lt;li class=&quot;page-item&quot;&gt;&lt;a class=&quot;page-link border-info bg-info text-white&quot; href=&quot;#&quot;&gt;2&lt;/a&gt;&lt;/li&gt;
    &lt;li class=&quot;page-item&quot;&gt;&lt;a class=&quot;page-link border-info bg-info text-white&quot; href=&quot;#&quot;&gt;3&lt;/a&gt;&lt;/li&gt;
    &lt;li class=&quot;page-item&quot;&gt;&lt;a class=&quot;page-link border-info bg-info text-white&quot; href=&quot;#&quot;&gt;Next&lt;/a&gt;&lt;/li&gt;
  &lt;/ul&gt;
&lt;/nav&gt;
</code></pre>
                </kbd>
              </div>
            </collapse-content>
            <nav aria-label="Page navigation example">
              <ul class="pagination">
                  <li class="page-item"><a class="page-link border-primary bg-primary text-white" href="#">Previous</a></li>
                  <li class="page-item"><a class="page-link border-primary bg-primary text-white" href="#">1</a></li>
                  <li class="page-item"><a class="page-link border-primary bg-primary text-white" href="#">2</a></li>
                  <li class="page-item"><a class="page-link border-primary bg-primary text-white" href="#">3</a></li>
                  <li class="page-item"><a class="page-link border-primary bg-primary text-white" href="#">Next</a></li>
              </ul>
            </nav>
            <nav aria-label="Page navigation example">
              <ul class="pagination">
                  <li class="page-item"><a class="page-link border-success bg-success text-white" href="#">Previous</a></li>
                  <li class="page-item"><a class="page-link border-success bg-success text-white" href="#">1</a></li>
                  <li class="page-item"><a class="page-link border-success bg-success text-white" href="#">2</a></li>
                  <li class="page-item"><a class="page-link border-success bg-success text-white" href="#">3</a></li>
                  <li class="page-item"><a class="page-link border-success bg-success text-white" href="#">Next</a></li>
              </ul>
            </nav>
            <nav aria-label="Page navigation example">
              <ul class="pagination mb-0 ">
                  <li class="page-item"><a class="page-link border-info bg-info text-white" href="#">Previous</a></li>
                  <li class="page-item"><a class="page-link border-info bg-info text-white" href="#">1</a></li>
                  <li class="page-item"><a class="page-link border-info bg-info text-white" href="#">2</a></li>
                  <li class="page-item"><a class="page-link border-info bg-info text-white" href="#">3</a></li>
                  <li class="page-item"><a class="page-link border-info bg-info text-white" href="#">Next</a></li>
              </ul>
            </nav>
          </template>
        </iq-card>
      </div>
      <div class="col-lg-6">
        <iq-card>
          <template v-slot:headerTitle>
            <h4 class="card-title">Working with icons</h4>
          </template>
          <template v-slot:headerAction>
            <collapse class="text-primary float-right" href="#example-collapse3" data-bs-toggle="collapse">
              <i class="ri-code-s-slash-line" />
            </collapse>
          </template>
          <template v-slot:body>
            <p>Looking to use an icon or symbol in place of text for some pagination links? Be sure to provide proper screen reader support with <code>aria</code> attributes.</p>
            <collapse-content id="example-collapse3" class="mb-2">
              <div class="card">
                <kbd class="bg-dark">
                  <pre class="text-white" id="pagination-with-icon">
                    <code>
&lt;nav aria-label=&quot;Page navigation example&quot;&gt;
  &lt;ul class=&quot;pagination mb-0&quot;&gt;
    &lt;li class=&quot;page-item&quot;&gt; &lt;a class=&quot;page-link&quot; href=&quot;#&quot; aria-label=&quot;Previous&quot;&gt; &lt;span aria-hidden=&quot;true&quot;&gt;&laquo;&lt;/span&gt; &lt;/a&gt; &lt;/li&gt;
    &lt;li class=&quot;page-item&quot;&gt;&lt;a class=&quot;page-link&quot; href=&quot;#&quot;&gt;1&lt;/a&gt;&lt;/li&gt;
    &lt;li class=&quot;page-item&quot;&gt;&lt;a class=&quot;page-link&quot; href=&quot;#&quot;&gt;2&lt;/a&gt;&lt;/li&gt;
    &lt;li class=&quot;page-item&quot;&gt;&lt;a class=&quot;page-link&quot; href=&quot;#&quot;&gt;3&lt;/a&gt;&lt;/li&gt;
    &lt;li class=&quot;page-item&quot;&gt; &lt;a class=&quot;page-link&quot; href=&quot;#&quot; aria-label=&quot;Next&quot;&gt; &lt;span aria-hidden=&quot;true&quot;&gt;&raquo;&lt;/span&gt; &lt;/a&gt; &lt;/li&gt;
  &lt;/ul&gt;
&lt;/nav&gt;
</code></pre>
                </kbd>
              </div>
            </collapse-content>
            <nav aria-label="Page navigation example">
              <ul class="pagination mb-0">
                  <li class="page-item">
                    <a class="page-link" href="#" aria-label="Previous">
                    <span aria-hidden="true">«</span>
                    </a>
                  </li>
                  <li class="page-item"><a class="page-link" href="#">1</a></li>
                  <li class="page-item"><a class="page-link" href="#">2</a></li>
                  <li class="page-item"><a class="page-link" href="#">3</a></li>
                  <li class="page-item">
                    <a class="page-link" href="#" aria-label="Next">
                    <span aria-hidden="true">»</span>
                    </a>
                  </li>
              </ul>
            </nav>
          </template>
        </iq-card>
        <iq-card>
          <template v-slot:headerTitle>
            <h4 class="card-title">Pagination Sizing</h4>
          </template>
          <template v-slot:headerAction>
            <collapse class="text-primary float-right" href="#example-collapse4" data-bs-toggle="collapse">
              <i class="ri-code-s-slash-line" />
            </collapse>
          </template>
          <template v-slot:body>
            <p>Fancy larger or smaller pagination? Add prop <code>size="lg"</code> or <code>size="sm"</code> for additional sizes.</p>
            <collapse-content id="example-collapse4" class="mb-2">
              <div class="card">
                <kbd class="bg-dark">
                  <pre class="text-white" id="pagination-with-icon-size">
                    <code>
&lt;nav aria-label=&quot;...&quot;&gt;
  &lt;ul class=&quot;pagination pagination-lg&quot;&gt;
    &lt;li class=&quot;page-item active&quot; aria-current=&quot;page&quot;&gt; &lt;span class=&quot;page-link&quot;&gt; 1 &lt;span class=&quot;sr-only&quot;&gt;(current)&lt;/span&gt; &lt;/span&gt; &lt;/li&gt;
    &lt;li class=&quot;page-item&quot;&gt;&lt;a class=&quot;page-link&quot; href=&quot;#&quot;&gt;2&lt;/a&gt;&lt;/li&gt;
    &lt;li class=&quot;page-item&quot;&gt;&lt;a class=&quot;page-link&quot; href=&quot;#&quot;&gt;3&lt;/a&gt;&lt;/li&gt;
  &lt;/ul&gt;
&lt;/nav&gt;
&lt;nav aria-label=&quot;...&quot;&gt;
  &lt;ul class=&quot;pagination&quot;&gt;
    &lt;li class=&quot;page-item active&quot; aria-current=&quot;page&quot;&gt; &lt;span class=&quot;page-link&quot;&gt; 1 &lt;span class=&quot;sr-only&quot;&gt;(current)&lt;/span&gt; &lt;/span&gt; &lt;/li&gt;
    &lt;li class=&quot;page-item&quot;&gt;&lt;a class=&quot;page-link&quot; href=&quot;#&quot;&gt;2&lt;/a&gt;&lt;/li&gt;
    &lt;li class=&quot;page-item&quot;&gt;&lt;a class=&quot;page-link&quot; href=&quot;#&quot;&gt;3&lt;/a&gt;&lt;/li&gt;
  &lt;/ul&gt;
&lt;/nav&gt;
&lt;nav aria-label=&quot;...&quot;&gt;
  &lt;ul class=&quot;pagination pagination-sm&quot;&gt;
    &lt;li class=&quot;page-item active&quot; aria-current=&quot;page&quot;&gt; &lt;span class=&quot;page-link&quot;&gt; 1 &lt;span class=&quot;sr-only&quot;&gt;(current)&lt;/span&gt; &lt;/span&gt; &lt;/li&gt; &lt;li class=&quot;page-item&quot;&gt;&lt;a class=&quot;page-link&quot; href=&quot;#&quot;&gt;2&lt;/a&gt;&lt;/li&gt;
    &lt;li class=&quot;page-item&quot;&gt;&lt;a class=&quot;page-link&quot; href=&quot;#&quot;&gt;3&lt;/a&gt;&lt;/li&gt;
  &lt;/ul&gt;
&lt;/nav&gt;
</code></pre>
                </kbd>
              </div>
            </collapse-content>
            <nav aria-label="...">
              <ul class="pagination pagination-lg">
                <li class="page-item active" aria-current="page">
                  <span class="page-link">
                  1
                  <span class="sr-only">(current)</span>
                  </span>
                </li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
              </ul>
            </nav>
            <nav aria-label="...">
              <ul class="pagination">
                <li class="page-item active" aria-current="page">
                  <span class="page-link">
                  1
                  <span class="sr-only">(current)</span>
                  </span>
                </li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
              </ul>
            </nav>
            <nav aria-label="...">
              <ul class="pagination pagination-sm">
                <li class="page-item active" aria-current="page">
                  <span class="page-link">
                  1
                  <span class="sr-only">(current)</span>
                  </span>
                </li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
              </ul>
            </nav>
          </template>
        </iq-card>
        <iq-card>
          <template v-slot:headerTitle>
            <h4 class="card-title">Alignment</h4>
          </template>
          <template v-slot:headerAction>
            <collapse class="text-primary float-right" href="#example-collapse5" data-bs-toggle="collapse">
              <i class="ri-code-s-slash-line" />
            </collapse>
          </template>
          <template v-slot:body>
            <p>By default the pagination component is left aligned. Change the alignment to <code>center</code>, <code>right</code> (<code>right</code> is an alias for <code>end</code>), or <code>fill</code> by setting the prop align to the appropriate value.</p>
            <collapse-content id="example-collapse5" class="mb-2">
              <div class="card">
                <kbd class="bg-dark">
                  <pre class="text-white" id="pagination-align">
                    <code>
&lt;div&gt;
  &lt;h6&gt;Left alignment (default)&lt;/h6&gt;
  &lt;nav aria-label=&quot;Page navigation example&quot;&gt;
    &lt;ul class=&quot;pagination&quot;&gt;
      &lt;li class=&quot;page-item disabled&quot;&gt; &lt;a class=&quot;page-link&quot; href=&quot;#&quot; tabindex=&quot;-1&quot; aria-disabled=&quot;true&quot;&gt;Previous&lt;/a&gt; &lt;/li&gt;
      &lt;li class=&quot;page-item&quot;&gt;&lt;a class=&quot;page-link&quot; href=&quot;#&quot;&gt;1&lt;/a&gt;&lt;/li&gt;
      &lt;li class=&quot;page-item&quot;&gt;&lt;a class=&quot;page-link&quot; href=&quot;#&quot;&gt;2&lt;/a&gt;&lt;/li&gt;
      &lt;li class=&quot;page-item&quot;&gt;&lt;a class=&quot;page-link&quot; href=&quot;#&quot;&gt;3&lt;/a&gt;&lt;/li&gt;
      &lt;li class=&quot;page-item&quot;&gt; &lt;a class=&quot;page-link&quot; href=&quot;#&quot;&gt;Next&lt;/a&gt; &lt;/li&gt;
    &lt;/ul&gt;
  &lt;/nav&gt;
&lt;/div&gt;
&lt;div class=&quot;mt-3&quot;&gt;
  &lt;h6 class=&quot;text-center&quot;&gt;Center alignment&lt;/h6&gt;
  &lt;nav aria-label=&quot;Page navigation example&quot;&gt;
    &lt;ul class=&quot;pagination justify-content-center&quot;&gt;
      &lt;li class=&quot;page-item disabled&quot;&gt; &lt;a class=&quot;page-link&quot; href=&quot;#&quot; tabindex=&quot;-1&quot; aria-disabled=&quot;true&quot;&gt;Previous&lt;/a&gt; &lt;/li&gt;
      &lt;li class=&quot;page-item&quot;&gt;&lt;a class=&quot;page-link&quot; href=&quot;#&quot;&gt;1&lt;/a&gt;&lt;/li&gt;
      &lt;li class=&quot;page-item&quot;&gt;&lt;a class=&quot;page-link&quot; href=&quot;#&quot;&gt;2&lt;/a&gt;&lt;/li&gt;
      &lt;li class=&quot;page-item&quot;&gt;&lt;a class=&quot;page-link&quot; href=&quot;#&quot;&gt;3&lt;/a&gt;&lt;/li&gt;
      &lt;li class=&quot;page-item&quot;&gt; &lt;a class=&quot;page-link&quot; href=&quot;#&quot;&gt;Next&lt;/a&gt; &lt;/li&gt;
    &lt;/ul&gt;
  &lt;/nav&gt;
&lt;/div&gt;
&lt;div class=&quot;mt-3&quot;&gt;
  &lt;h6 class=&quot;text-end&quot;&gt;Right (end) alignment&lt;/h6&gt;
  &lt;nav aria-label=&quot;Page navigation example&quot;&gt;
    &lt;ul class=&quot;pagination justify-content-end&quot;&gt;
      &lt;li class=&quot;page-item disabled&quot;&gt; &lt;a class=&quot;page-link&quot; href=&quot;#&quot; tabindex=&quot;-1&quot; aria-disabled=&quot;true&quot;&gt;Previous&lt;/a&gt; &lt;/li&gt;
      &lt;li class=&quot;page-item&quot;&gt;&lt;a class=&quot;page-link&quot; href=&quot;#&quot;&gt;1&lt;/a&gt;&lt;/li&gt; &lt;li class=&quot;page-item&quot;&gt;&lt;a class=&quot;page-link&quot; href=&quot;#&quot;&gt;2&lt;/a&gt;&lt;/li&gt;
      &lt;li class=&quot;page-item&quot;&gt;&lt;a class=&quot;page-link&quot; href=&quot;#&quot;&gt;3&lt;/a&gt;&lt;/li&gt; &lt;li class=&quot;page-item&quot;&gt; &lt;a class=&quot;page-link&quot; href=&quot;#&quot;&gt;Next&lt;/a&gt; &lt;/li&gt;
    &lt;/ul&gt;
  &lt;/nav&gt;
&lt;/div&gt;
</code></pre>
                </kbd>
              </div>
            </collapse-content>
            <div>
              <h6>Left alignment (default)</h6>
              <nav aria-label="Page navigation example">
                <ul class="pagination">
                  <li class="page-item disabled">
                    <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Previous</a>
                  </li>
                  <li class="page-item"><a class="page-link" href="#">1</a></li>
                  <li class="page-item"><a class="page-link" href="#">2</a></li>
                  <li class="page-item"><a class="page-link" href="#">3</a></li>
                  <li class="page-item">
                    <a class="page-link" href="#">Next</a>
                  </li>
                </ul>
              </nav>
            </div>

            <div class="mt-3">
              <h6 class="text-center">Center alignment</h6>
              <nav aria-label="Page navigation example">
                <ul class="pagination justify-content-center">
                    <li class="page-item disabled">
                      <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Previous</a>
                    </li>
                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item">
                      <a class="page-link" href="#">Next</a>
                    </li>
                </ul>
              </nav>
            </div>

            <div class="mt-3">
              <h6 class="text-end">Right (end) alignment</h6>
              <nav aria-label="Page navigation example">
                <ul class="pagination justify-content-end">
                  <li class="page-item disabled">
                    <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Previous</a>
                  </li>
                  <li class="page-item"><a class="page-link" href="#">1</a></li>
                  <li class="page-item"><a class="page-link" href="#">2</a></li>
                  <li class="page-item"><a class="page-link" href="#">3</a></li>
                  <li class="page-item">
                    <a class="page-link" href="#">Next</a>
                  </li>
                </ul>
              </nav>
            </div>
          </template>
        </iq-card>
      </div>
    </div>
</template>
<script>
// import { socialvue } from '../../config/pluginInit'
export default {
  name: 'UiPagination',
  mounted () {
    // socialvue.index()
  }
}
</script>
