<template>
    <div class="row">
      <div class="col-sm-12">
          <div class="card position-relative inner-page-bg bg-primary" style="height: 150px;">
            <div class="inner-page-title">
                <h3 class="text-white">Modal Page</h3>
                <p class="text-white">lorem ipsum</p>
            </div>
          </div>
      </div>
      <div class="col-sm-12 col-lg-6">
        <iq-card>
          <template v-slot:headerTitle>
            <h4 class="card-title">Modal components</h4>
          </template>
          <template v-slot:headerAction>
            <collapse className="text-primary float-right"  data-bs-toggle="collapse" collapseTarget="example-collapse" ariaControls="example-collapse">
              <i class="ri-code-s-slash-line" />
            </collapse>
          </template>
          <template v-slot:body>
            <p>Below is a <em>static</em> modal example (meaning its <code>position</code> and <code>display</code> have been overridden). Included are the modal header, modal body (required for <code>padding</code>), and modal footer (optional). We ask that you include modal headers with dismiss actions whenever possible, or provide another explicit dismiss action.</p>
            <collapse-content id="example-collapse" className="mb-2">
              <div class="card">
                <kbd class="bg-dark">
                  <pre class="text-white" id="modal-components-1">
                    <code>
&lt;button type=&quot;button&quot; class=&quot;btn btn-primary&quot; data-bs-toggle=&quot;modal&quot; data-bs-target=&quot;#modal1&quot;&gt; Launch demo modal &lt;/button&gt;
&lt;modal id=&quot;modal1&quot; tabindex=&quot;-1&quot; title=&quot;Create Post&quot; aria-labelledby=&quot;modal1Label&quot; aria-hidden=&quot;true&quot;&gt;
  &lt;model-header&gt;
    &lt;h5 class=&quot;modal-title&quot; id=&quot;modal1Label&quot;&gt;Modal Title&lt;/h5&gt;
    &lt;button :dismissable=&quot;true&quot; class=&quot;btn-close&quot; data-bs-dismiss=&quot;modal&quot; aria-label=&quot;Close&quot;&gt;&lt;/button&gt;
  &lt;/model-header&gt;
  &lt;model-body&gt;
  &lt;/model-body&gt;
  &lt;model-footer&gt;
    &lt;button type=&quot;button&quot; class=&quot;btn btn-secondary&quot; data-bs-dismiss=&quot;modal&quot;&gt;Close&lt;/button&gt;
    &lt;button type=&quot;button&quot; class=&quot;btn btn-primary&quot;&gt;Save changes&lt;/button&gt;
  &lt;/model-footer&gt;
&lt;/modal&gt;
</code></pre>
                </kbd>
              </div>
            </collapse-content>
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modal1">
              Launch demo modal
            </button>
            <modal id="modal1" tabindex="-1" title="Create Post" aria-labelledby="modal1Label" aria-hidden="true">
              <model-header>
                <h5 class="modal-title" id="modal1Label">Modal Title</h5>
                <button :dismissable="true" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </model-header>
              <model-body>
              </model-body>
              <model-footer>
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
              </model-footer>
            </modal>
          </template>
        </iq-card>
        <iq-card>
          <template v-slot:headerTitle>
            <h4 class="card-title">Modal Scrolling</h4>
          </template>
          <template v-slot:headerAction>
            <collapse className="text-primary float-right"  data-bs-toggle="collapse" collapseTarget="example-collapse1" ariaControls="example-collapse">
              <i class="ri-code-s-slash-line" />
            </collapse>
          </template>
          <template v-slot:body>
            <p>When modals become too long for the user’s viewport or device, they scroll independent of the page itself. Try the demo below to see what we mean.</p>
            <collapse-content id="example-collapse1" className="mb-2">
              <div class="card">
                <kbd class="bg-dark">
                  <pre class="text-white" id="modal-scrolling">
                    <code>
&lt;button type=&quot;button&quot; class=&quot;btn btn-primary&quot; data-bs-toggle=&quot;modal&quot; data-bs-target=&quot;#modal2&quot;&gt; Launch demo modal &lt;/button&gt;
&lt;modal id=&quot;modal2&quot; tabindex=&quot;-1&quot; title=&quot;Create Post&quot; aria-labelledby=&quot;modal2Label&quot; aria-hidden=&quot;true&quot; dialogClass=&quot;modal-dialog-scrollable&quot;&gt;
  &lt;model-header&gt;
    &lt;h5 class=&quot;modal-title&quot; id=&quot;modal2Label&quot;&gt;Modal Title&lt;/h5&gt;
    &lt;button :dismissable=&quot;true&quot; class=&quot;btn-close&quot; data-bs-dismiss=&quot;modal&quot; aria-label=&quot;Close&quot;&gt;&lt;/button&gt;
  &lt;/model-header&gt;
  &lt;model-body&gt;
    &lt;p&gt;Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.&lt;/p&gt;
    &lt;p&gt;Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.&lt;/p&gt;
    &lt;p&gt;Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Donec sed odio dui. Donec ullamcorper nulla non metus auctor fringilla.&lt;/p&gt;
    &lt;p&gt;Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.&lt;/p&gt;
    &lt;p&gt;Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.&lt;/p&gt; &lt;p&gt;Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Donec sed odio dui. Donec ullamcorper nulla non metus auctor fringilla.&lt;/p&gt; &lt;p&gt;Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.&lt;/p&gt;
    &lt;p&gt;Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.&lt;/p&gt; &lt;p&gt;Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Donec sed odio dui. Donec ullamcorper nulla non metus auctor fringilla.&lt;/p&gt; &lt;p&gt;Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.&lt;/p&gt;
    &lt;p&gt;Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.&lt;/p&gt; &lt;p&gt;Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Donec sed odio dui. Donec ullamcorper nulla non metus auctor fringilla.&lt;/p&gt; &lt;p&gt;Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.&lt;/p&gt;
    &lt;p&gt;Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.&lt;/p&gt; &lt;p&gt;Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Donec sed odio dui. Donec ullamcorper nulla non metus auctor fringilla.&lt;/p&gt; &lt;p&gt;Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.&lt;/p&gt;
    &lt;p&gt;Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.&lt;/p&gt; &lt;p&gt;Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Donec sed odio dui. Donec ullamcorper nulla non metus auctor fringilla.&lt;/p&gt;
  &lt;/model-body&gt;
  &lt;model-footer&gt;
    &lt;button type=&quot;button&quot; class=&quot;btn btn-secondary&quot; data-bs-dismiss=&quot;modal&quot;&gt;Close&lt;/button&gt;
    &lt;button type=&quot;button&quot; class=&quot;btn btn-primary&quot;&gt;Save changes&lt;/button&gt;
  &lt;/model-footer&gt;
&lt;/modal&gt;
</code></pre>
                </kbd>
              </div>
            </collapse-content>
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modal2">
              Launch demo modal
            </button>
            <modal id="modal2" tabindex="-1" title="Create Post" aria-labelledby="modal2Label" aria-hidden="true" dialogClass="modal-dialog-scrollable">
              <model-header>
                <h5 class="modal-title" id="modal2Label">Modal Title</h5>
                <button :dismissable="true" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </model-header>
              <model-body>
                <p>Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
                <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.</p>
                <p>Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Donec sed odio dui. Donec ullamcorper nulla non metus auctor fringilla.</p>
                <p>Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
                <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.</p>
                <p>Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Donec sed odio dui. Donec ullamcorper nulla non metus auctor fringilla.</p>
                <p>Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
                <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.</p>
                <p>Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Donec sed odio dui. Donec ullamcorper nulla non metus auctor fringilla.</p>
                <p>Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
                <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.</p>
                <p>Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Donec sed odio dui. Donec ullamcorper nulla non metus auctor fringilla.</p>
                <p>Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
                <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.</p>
                <p>Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Donec sed odio dui. Donec ullamcorper nulla non metus auctor fringilla.</p>
                <p>Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
                <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.</p>
                <p>Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Donec sed odio dui. Donec ullamcorper nulla non metus auctor fringilla.</p>
              </model-body>
              <model-footer>
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
              </model-footer>
            </modal>
          </template>
        </iq-card>
        <iq-card>
          <template v-slot:headerTitle>
            <h4 class="card-title">Optional sizes</h4>
          </template>
          <template v-slot:headerAction>
            <collapse className="text-primary float-right"  data-bs-toggle="collapse" collapseTarget="example-collapse2" ariaControls="example-collapse2">
              <i class="ri-code-s-slash-line" />
            </collapse>
          </template>
          <template v-slot:body>
            <p>Modals have three optional sizes, available via modifier classes to be placed on a .modal-dialog. These sizes kick in at certain breakpoints to avoid horizontal scrollbars on narrower viewports.</p>
            <collapse-content id="example-collapse2" className="mb-2">
              <div class="card">
                <kbd class="bg-dark">
                  <pre class="text-white" id="modal-components-2">
                    <code>
&lt;button type=&quot;button&quot; class=&quot;btn btn-primary mt-1 me-1&quot; data-bs-toggle=&quot;modal&quot; data-bs-target=&quot;#modal3&quot;&gt; Extra large modal &lt;/button&gt;
&lt;modal id=&quot;modal3&quot; tabindex=&quot;-1&quot; title=&quot;Create Post&quot; aria-labelledby=&quot;modal3Label&quot; aria-hidden=&quot;true&quot; dialogClass=&quot;modal-xl&quot;&gt;
  &lt;model-header&gt;
    &lt;h5 class=&quot;modal-title&quot; id=&quot;modal3Label&quot;&gt;Modal Title&lt;/h5&gt;
    &lt;button :dismissable=&quot;true&quot; class=&quot;btn-close&quot; data-bs-dismiss=&quot;modal&quot; aria-label=&quot;Close&quot;&gt;&lt;/button&gt;
  &lt;/model-header&gt;
  &lt;model-body&gt;
    &lt;p&gt;Modal body text goes here.&lt;/p&gt;
  &lt;/model-body&gt;
  &lt;model-footer&gt; &lt;button type=&quot;button&quot; class=&quot;btn btn-secondary&quot; data-bs-dismiss=&quot;modal&quot;&gt;Close&lt;/button&gt;
    &lt;button type=&quot;button&quot; class=&quot;btn btn-primary&quot;&gt;Save changes&lt;/button&gt;
  &lt;/model-footer&gt;
&lt;/modal&gt;
&lt;button type=&quot;button&quot; class=&quot;btn btn-primary mt-1 me-1&quot; data-bs-toggle=&quot;modal&quot; data-bs-target=&quot;#modal4&quot;&gt; Large modal &lt;/button&gt;
&lt;modal id=&quot;modal4&quot; tabindex=&quot;-1&quot; title=&quot;Create Post&quot; aria-labelledby=&quot;modal4Label&quot; aria-hidden=&quot;true&quot; dialogClass=&quot;modal-lg&quot;&gt;
  &lt;model-header&gt;
    &lt;h5 class=&quot;modal-title&quot; id=&quot;modal4Label&quot;&gt;Modal Title&lt;/h5&gt;
    &lt;button :dismissable=&quot;true&quot; class=&quot;btn-close&quot; data-bs-dismiss=&quot;modal&quot; aria-label=&quot;Close&quot;&gt;&lt;/button&gt;
  &lt;/model-header&gt;
  &lt;model-body&gt;
    &lt;p&gt;Modal body text goes here.&lt;/p&gt;
  &lt;/model-body&gt;
  &lt;model-footer&gt;
    &lt;button type=&quot;button&quot; class=&quot;btn btn-secondary&quot; data-bs-dismiss=&quot;modal&quot;&gt;Close&lt;/button&gt; &lt;button type=&quot;button&quot; class=&quot;btn btn-primary&quot;&gt;Save changes&lt;/button&gt;
  &lt;/model-footer&gt;
&lt;/modal&gt;
&lt;button type=&quot;button&quot; class=&quot;btn btn-primary mt-1 me-1&quot; data-bs-toggle=&quot;modal&quot; data-bs-target=&quot;#modal5&quot;&gt; Small modal &lt;/button&gt;
&lt;modal id=&quot;modal5&quot; tabindex=&quot;-1&quot; title=&quot;Create Post&quot; aria-labelledby=&quot;modal4Label&quot; aria-hidden=&quot;true&quot; dialogClass=&quot;modal-sm&quot;&gt;
  &lt;model-header&gt;
    &lt;h5 class=&quot;modal-title&quot; id=&quot;modal5Label&quot;&gt;Modal Title&lt;/h5&gt;
    &lt;button :dismissable=&quot;true&quot; class=&quot;btn-close&quot; data-bs-dismiss=&quot;modal&quot; aria-label=&quot;Close&quot;&gt;&lt;/button&gt;
  &lt;/model-header&gt;
  &lt;model-body&gt;
    &lt;p&gt;Modal body text goes here.&lt;/p&gt;
  &lt;/model-body&gt;
  &lt;model-footer&gt; &lt;button type=&quot;button&quot; class=&quot;btn btn-secondary&quot; data-bs-dismiss=&quot;modal&quot;&gt;Close&lt;/button&gt;
    &lt;button type=&quot;button&quot; class=&quot;btn btn-primary&quot;&gt;Save changes&lt;/button&gt;
  &lt;/model-footer&gt;
&lt;/modal&gt;
</code></pre>
                </kbd>
              </div>
            </collapse-content>
            <button type="button" class="btn btn-primary mt-1 me-1" data-bs-toggle="modal" data-bs-target="#modal3">
              Extra large modal
            </button>
            <modal id="modal3" tabindex="-1" title="Create Post" aria-labelledby="modal3Label" aria-hidden="true" dialogClass="modal-xl">
              <model-header>
                <h5 class="modal-title" id="modal3Label">Modal Title</h5>
                <button :dismissable="true" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </model-header>
              <model-body>
                <p>Modal body text goes here.</p>
              </model-body>
              <model-footer>
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
              </model-footer>
            </modal>
            <button type="button" class="btn btn-primary mt-1 me-1" data-bs-toggle="modal" data-bs-target="#modal4">
              Large modal
            </button>
            <modal id="modal4" tabindex="-1" title="Create Post" aria-labelledby="modal4Label" aria-hidden="true" dialogClass="modal-lg">
              <model-header>
                <h5 class="modal-title" id="modal4Label">Modal Title</h5>
                <button :dismissable="true" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </model-header>
              <model-body>
                <p>Modal body text goes here.</p>
              </model-body>
              <model-footer>
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
              </model-footer>
            </modal>
            <button type="button" class="btn btn-primary mt-1 me-1" data-bs-toggle="modal" data-bs-target="#modal5">
              Small modal
            </button>
            <modal id="modal5" tabindex="-1" title="Create Post" aria-labelledby="modal4Label" aria-hidden="true" dialogClass="modal-sm">
              <model-header>
                <h5 class="modal-title" id="modal5Label">Modal Title</h5>
                <button :dismissable="true" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </model-header>
              <model-body>
                <p>Modal body text goes here.</p>
              </model-body>
              <model-footer>
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
              </model-footer>
            </modal>
          </template>
        </iq-card>
      </div>
      <div class="col-lg-6 col-sm-12">
        <iq-card>
          <template v-slot:headerTitle>
            <h4 class="card-title">Scrolling long content</h4>
          </template>
          <template v-slot:headerAction>
            <collapse className="text-primary float-right"  data-bs-toggle="collapse" collapseTarget="example-collapse3" ariaControls="example-collapse3">
              <i class="ri-code-s-slash-line" />
            </collapse>
          </template>
          <template v-slot:body>
            <p>When modals become too long for the user’s viewport or device, they scroll independent of the page itself. Try the demo below to see what we mean.</p>
            <collapse-content id="example-collapse3" className="mb-2">
              <div class="card">
                <kbd class="bg-dark">
                  <pre class="text-white" id="scroll-long-components">
                    <code>
&lt;button type=&quot;button&quot; class=&quot;btn btn-primary&quot; data-bs-toggle=&quot;modal&quot; data-bs-target=&quot;#modal6&quot;&gt; Launch demo modal &lt;/button&gt;
&lt;modal id=&quot;modal6&quot; tabindex=&quot;-1&quot; title=&quot;Create Post&quot; aria-labelledby=&quot;modal6Label&quot; aria-hidden=&quot;true&quot;&gt;
  &lt;model-header&gt;
    &lt;h5 class=&quot;modal-title&quot; id=&quot;modal6Label&quot;&gt;Modal Title&lt;/h5&gt;
    &lt;button :dismissable=&quot;true&quot; class=&quot;btn-close&quot; data-bs-dismiss=&quot;modal&quot; aria-label=&quot;Close&quot;&gt;&lt;/button&gt;
  &lt;/model-header&gt;
  &lt;model-body&gt;
    &lt;p&gt;Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.&lt;/p&gt;
    &lt;p&gt;Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.&lt;/p&gt;
    &lt;p&gt;Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Donec sed odio dui. Donec ullamcorper nulla non metus auctor fringilla.&lt;/p&gt;
    &lt;p&gt;Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.&lt;/p&gt;
    &lt;p&gt;Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.&lt;/p&gt;
    &lt;p&gt;Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Donec sed odio dui. Donec ullamcorper nulla non metus auctor fringilla.&lt;/p&gt;
    &lt;p&gt;Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.&lt;/p&gt;
    &lt;p&gt;Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.&lt;/p&gt;
    &lt;p&gt;Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Donec sed odio dui. Donec ullamcorper nulla non metus auctor fringilla.&lt;/p&gt;
    &lt;p&gt;Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.&lt;/p&gt;
    &lt;p&gt;Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.&lt;/p&gt;
    &lt;p&gt;Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Donec sed odio dui. Donec ullamcorper nulla non metus auctor fringilla.&lt;/p&gt;
    &lt;p&gt;Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.&lt;/p&gt;
    &lt;p&gt;Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.&lt;/p&gt;
    &lt;p&gt;Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Donec sed odio dui. Donec ullamcorper nulla non metus auctor fringilla.&lt;/p&gt;
    &lt;p&gt;Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.&lt;/p&gt;
    &lt;p&gt;Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.&lt;/p&gt; &lt;p&gt;Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Donec sed odio dui. Donec ullamcorper nulla non metus auctor fringilla.&lt;/p&gt;
  &lt;/model-body&gt;
  &lt;model-footer&gt;
    &lt;button type=&quot;button&quot; class=&quot;btn btn-secondary&quot; data-bs-dismiss=&quot;modal&quot;&gt;Close&lt;/button&gt; &lt;button type=&quot;button&quot; class=&quot;btn btn-primary&quot;&gt;Save changes&lt;/button&gt;
  &lt;/model-footer&gt;
&lt;/modal&gt;

</code></pre>
                </kbd>
              </div>
            </collapse-content>
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modal6">
              Launch demo modal
            </button>
            <modal id="modal6" tabindex="-1" title="Create Post" aria-labelledby="modal6Label" aria-hidden="true">
              <model-header>
                <h5 class="modal-title" id="modal6Label">Modal Title</h5>
                <button :dismissable="true" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </model-header>
              <model-body>
                <p>Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
                <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.</p>
                <p>Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Donec sed odio dui. Donec ullamcorper nulla non metus auctor fringilla.</p>
                <p>Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
                <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.</p>
                <p>Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Donec sed odio dui. Donec ullamcorper nulla non metus auctor fringilla.</p>
                <p>Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
                <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.</p>
                <p>Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Donec sed odio dui. Donec ullamcorper nulla non metus auctor fringilla.</p>
                <p>Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
                <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.</p>
                <p>Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Donec sed odio dui. Donec ullamcorper nulla non metus auctor fringilla.</p>
                <p>Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
                <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.</p>
                <p>Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Donec sed odio dui. Donec ullamcorper nulla non metus auctor fringilla.</p>
                <p>Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
                <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.</p>
                <p>Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Donec sed odio dui. Donec ullamcorper nulla non metus auctor fringilla.</p>
              </model-body>
              <model-footer>
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
              </model-footer>
            </modal>
          </template>
        </iq-card>
        <iq-card>
          <template v-slot:headerTitle>
            <h4 class="card-title">Vertically centered</h4>
          </template>
          <template v-slot:headerAction>
            <collapse className="text-primary float-right"  data-bs-toggle="collapse" collapseTarget="example-collapse4" ariaControls="example-collapse4">
              <i class="ri-code-s-slash-line" />
            </collapse>
          </template>
          <template v-slot:body>
            <p>Add <code class="highlighter-rouge">.modal-dialog-centered</code> to <code class="highlighter-rouge">.modal-dialog</code> to vertically center the modal.</p>
            <collapse-content id="example-collapse4" className="mb-2">
              <div class="card">
                <kbd class="bg-dark">
                  <pre class="text-white" id="vertical-center">
                    <code>
&lt;button type=&quot;button&quot; class=&quot;btn btn-primary mb-1&quot; data-bs-toggle=&quot;modal&quot; data-bs-target=&quot;#modal7&quot;&gt; Launch demo modal &lt;/button&gt;
&lt;modal id=&quot;modal7&quot; tabindex=&quot;-1&quot; title=&quot;Create Post&quot; aria-labelledby=&quot;modal7Label&quot; aria-hidden=&quot;true&quot; dialogClass=&quot;modal-dialog-centered&quot;&gt;
  &lt;model-header&gt;
    &lt;h5 class=&quot;modal-title&quot; id=&quot;modal7Label&quot;&gt;Modal Title&lt;/h5&gt;
    &lt;button :dismissable=&quot;true&quot; class=&quot;btn-close&quot; data-bs-dismiss=&quot;modal&quot; aria-label=&quot;Close&quot;&gt;&lt;/button&gt;
  &lt;/model-header&gt;
  &lt;model-body&gt;
    &lt;p&gt;Modal body text goes here.&lt;/p&gt;
  &lt;/model-body&gt;
  &lt;model-footer&gt;
    &lt;button type=&quot;button&quot; class=&quot;btn btn-secondary&quot; data-bs-dismiss=&quot;modal&quot;&gt;Close&lt;/button&gt;
    &lt;button type=&quot;button&quot; class=&quot;btn btn-primary&quot;&gt;Save changes&lt;/button&gt;
  &lt;/model-footer&gt;
&lt;/modal&gt;
&lt;button type=&quot;button&quot; class=&quot;btn btn-primary&quot; data-bs-toggle=&quot;modal&quot; data-bs-target=&quot;#modal8&quot;&gt; Vertically centered scrollable modal &lt;/button&gt;
&lt;modal id=&quot;modal8&quot; tabindex=&quot;-1&quot; title=&quot;Create Post&quot; aria-labelledby=&quot;modal8Label&quot; aria-hidden=&quot;true&quot; dialogClass=&quot;modal-dialog-centered modal-dialog-scrollable&quot;&gt;
  &lt;model-header&gt;
    &lt;h5 class=&quot;modal-title&quot; id=&quot;modal8Label&quot;&gt;Modal Title&lt;/h5&gt;
    &lt;button :dismissable=&quot;true&quot; class=&quot;btn-close&quot; data-bs-dismiss=&quot;modal&quot; aria-label=&quot;Close&quot;&gt;&lt;/button&gt;
  &lt;/model-header&gt;
  &lt;model-body&gt;
    &lt;p&gt;Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.&lt;/p&gt; &lt;p&gt;Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.&lt;/p&gt;
    &lt;p&gt;Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Donec sed odio dui. Donec ullamcorper nulla non metus auctor fringilla.&lt;/p&gt; &lt;p&gt;Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.&lt;/p&gt;
    &lt;p&gt;Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.&lt;/p&gt;
    &lt;p&gt;Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Donec sed odio dui. Donec ullamcorper nulla non metus auctor fringilla.&lt;/p&gt;
    &lt;p&gt;Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.&lt;/p&gt;
    &lt;p&gt;Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.&lt;/p&gt;
    &lt;p&gt;Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Donec sed odio dui. Donec ullamcorper nulla non metus auctor fringilla.&lt;/p&gt;
    &lt;p&gt;Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.&lt;/p&gt;
    &lt;p&gt;Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.&lt;/p&gt; &lt;p&gt;Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Donec sed odio dui. Donec ullamcorper nulla non metus auctor fringilla.&lt;/p&gt;
    &lt;p&gt;Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.&lt;/p&gt;
    &lt;p&gt;Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.&lt;/p&gt;
    &lt;p&gt;Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Donec sed odio dui. Donec ullamcorper nulla non metus auctor fringilla.&lt;/p&gt;
    &lt;p&gt;Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.&lt;/p&gt;
    &lt;p&gt;Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.&lt;/p&gt;
    &lt;p&gt;Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Donec sed odio dui. Donec ullamcorper nulla non metus auctor fringilla.&lt;/p&gt;
  &lt;/model-body&gt;
  &lt;model-footer&gt;
    &lt;button type=&quot;button&quot; class=&quot;btn btn-secondary&quot; data-bs-dismiss=&quot;modal&quot;&gt;Close&lt;/button&gt;
    &lt;button type=&quot;button&quot; class=&quot;btn btn-primary&quot;&gt;Save changes&lt;/button&gt;
  &lt;/model-footer&gt;
&lt;/modal&gt;
</code></pre>
                </kbd>
              </div>
            </collapse-content>
            <button type="button" class="btn btn-primary mb-1 me-1" data-bs-toggle="modal" data-bs-target="#modal7">
              Launch demo modal
            </button>
            <modal id="modal7" tabindex="-1" title="Create Post" aria-labelledby="modal7Label" aria-hidden="true" dialogClass="modal-dialog-centered">
              <model-header>
                <h5 class="modal-title" id="modal7Label">Modal Title</h5>
                <button :dismissable="true" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </model-header>
              <model-body>
                <p>Modal body text goes here.</p>
              </model-body>
              <model-footer>
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
              </model-footer>
            </modal>
            <button type="button" class="btn btn-primary me-1" data-bs-toggle="modal" data-bs-target="#modal8">
              Vertically centered scrollable modal
            </button>
            <modal id="modal8" tabindex="-1" title="Create Post" aria-labelledby="modal8Label" aria-hidden="true" dialogClass="modal-dialog-centered modal-dialog-scrollable">
              <model-header>
                <h5 class="modal-title" id="modal8Label">Modal Title</h5>
                <button :dismissable="true" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </model-header>
              <model-body>
                <p>Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
                <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.</p>
                <p>Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Donec sed odio dui. Donec ullamcorper nulla non metus auctor fringilla.</p>
                <p>Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
                <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.</p>
                <p>Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Donec sed odio dui. Donec ullamcorper nulla non metus auctor fringilla.</p>
                <p>Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
                <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.</p>
                <p>Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Donec sed odio dui. Donec ullamcorper nulla non metus auctor fringilla.</p>
                <p>Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
                <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.</p>
                <p>Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Donec sed odio dui. Donec ullamcorper nulla non metus auctor fringilla.</p>
                <p>Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
                <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.</p>
                <p>Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Donec sed odio dui. Donec ullamcorper nulla non metus auctor fringilla.</p>
                <p>Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
                <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.</p>
                <p>Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Donec sed odio dui. Donec ullamcorper nulla non metus auctor fringilla.</p>
              </model-body>
              <model-footer>
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
              </model-footer>
             </modal>
          </template>
        </iq-card>
        <iq-card>
          <template v-slot:headerTitle>
            <h4 class="card-title">Using the grid</h4>
          </template>
          <template v-slot:headerAction>
            <collapse className="text-primary float-right"  data-bs-toggle="collapse" collapseTarget="example-collapse5" ariaControls="example-collapse5">
              <i class="ri-code-s-slash-line" />
            </collapse>
          </template>
          <template v-slot:body>
             <p>Utilize the Bootstrap grid system within a modal by nesting <code>.container-fluid</code> within the <code>.modal-body</code>. Then, use the normal grid system classes as you would anywhere else.</p>
            <collapse-content id="example-collapse5" className="mb-2">
              <div class="card">
                <kbd class="bg-dark">
                  <pre class="text-white" id="using-grid">
                    <code>
&lt;b-button v-b-modal.modal-9 variant="primary"&gt;Launch demo modal&lt;/b-button&gt;
&lt;b-modal id="modal-9" centered title="Modal title" ok-title="Save Changes" cancel-title="Close"&gt;
  &lt;div class="iq-example-row"&gt;
    &lt;b-container fluid&gt;
      &lt;b-row class="mb-3"&gt;
        &lt;b-col md="4"&gt;
          md="4"
        &lt;/b-col&gt;
        &lt;b-col md="4" class="ml-auto"&gt;
          md="4" .ml-auto
        &lt;/b-col&gt;
      &lt;/b-row&gt;
      &lt;b-row class="mb-3"&gt;
        &lt;b-col md="3" class="ml-auto"&gt;md="3" .ml-auto&lt;/b-col&gt;
        &lt;b-col md="2" class="ml-auto"&gt;md="2" .ml-auto&lt;/b-col&gt;
      &lt;/b-row&gt;
      &lt;b-row class="mb-3"&gt;
        &lt;b-col md="6" class="ml-auto"&gt;md="6" .ml-auto&lt;/b-col&gt;
      &lt;/b-row&gt;
      &lt;b-row&gt;
        &lt;b-col sm="9"&gt;
          Level 1: sm="9"
          &lt;b-row&gt;
            &lt;b-col cols="8" sm="6"&gt;Level 2: cols="8" sm="6"&lt;/b-col&gt;
            &lt;b-col cols="4" sm="6"&gt;Level 2: cols="4" sm="6"&lt;/b-col&gt;
          &lt;/b-row&gt;
        &lt;/b-col&gt;
      &lt;/b-row&gt;
    &lt;/b-container&gt;
  &lt;/div&gt;
&lt;/b-modal&gt;
</code></pre>
                </kbd>
              </div>
            </collapse-content>
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modal9">
              Launch demo modal
            </button>
            <modal id="modal9" tabindex="-1" title="Create Post" aria-labelledby="modal9Label" aria-hidden="true">
              <model-header>
                <h5 class="modal-title" id="modal9Label">Modal Title</h5>
                <button :dismissable="true" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </model-header>
              <model-body>
                <div class="iq-example-row">
                  <div class="container-fluid">
                      <div class="row mb-3">
                        <div class="col-md-4">.col-md-4</div>
                        <div class="col-md-4 ms-auto">.col-md-4 .ms-auto</div>
                      </div>
                      <div class="row mb-3">
                        <div class="col-md-3 ms-auto">.col-md-3 .ms-auto</div>
                        <div class="col-md-2 ms-auto">.col-md-2 .ms-auto</div>
                      </div>
                      <div class="row mb-3">
                        <div class="col-md-6 ms-auto">.col-md-6 .ms-auto</div>
                      </div>
                      <div class="row">
                        <div class="col-sm-9">
                            Level 1: .col-sm-9
                            <div class="row">
                              <div class="col-8 col-sm-6">
                                  Level 2: .col-8 .col-sm-6
                              </div>
                              <div class="col-4 col-sm-6">
                                  Level 2: .col-4 .col-sm-6
                              </div>
                            </div>
                        </div>
                      </div>
                  </div>
                </div>
              </model-body>
              <model-footer>
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
              </model-footer>
            </modal>
          </template>
        </iq-card>
      </div>
      <div class="col-sm-12 col-lg-12">
        <iq-card>
          <template v-slot:headerTitle>
            <h4 class="card-title">Fullscreen Modal</h4>
          </template>
          <template v-slot:body>
            <p>Another override is the option to pop up a modal that covers the user viewport, available via modifier classes that are placed on a <code>.modal-dialog</code>.</p>
              <div class="bd-example">
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModalFullscreen">Full screen</button>
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModalFullscreenSm">Full screen below sm</button>
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModalFullscreenMd">Full screen below md</button>
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModalFullscreenLg">Full screen below lg</button>
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModalFullscreenXl">Full screen below xl</button>
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModalFullscreenXxl">Full screen below xxl</button>
              </div>
              <modal id="exampleModalFullscreen" tabindex="-1" title="Create Post" aria-labelledby="exampleModalFullscreenLabel" aria-hidden="true" dialogClass="modal-fullscreen">
              <model-header>
                <h5 class="modal-title" id="exampleModalFullscreenLabel">Full screen modal</h5>
                <button :dismissable="true" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </model-header>
              <model-body>
              </model-body>
              <model-footer>
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
              </model-footer>
            </modal>
              <modal id="exampleModalFullscreenSm" tabindex="-1" title="Create Post" aria-labelledby="exampleModalFullscreenSmLabel" aria-hidden="true" dialogClass="modal-fullscreen-sm-down">
              <model-header>
                <h5 class="modal-title" id="exampleModalFullscreenSmLabel">Full screen below sm</h5>
                <button :dismissable="true" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </model-header>
              <model-body>
              </model-body>
              <model-footer>
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
              </model-footer>
            </modal>
              <modal id="exampleModalFullscreenMd" tabindex="-1" title="Create Post" aria-labelledby="exampleModalFullscreenMdLabel" aria-hidden="true" dialogClass="modal-fullscreen-md-down">
              <model-header>
                <h5 class="modal-title" id="exampleModalFullscreenMdLabel">Full screen below md</h5>
                <button :dismissable="true" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </model-header>
              <model-body>
              </model-body>
              <model-footer>
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
              </model-footer>
            </modal>
              <modal id="exampleModalFullscreenLg" tabindex="-1" title="Create Post" aria-labelledby="exampleModalFullscreenLgLabel" aria-hidden="true" dialogClass="modal-fullscreen-lg-down">
              <model-header>
                <h5 class="modal-title" id="exampleModalFullscreenLgLabel">Full screen below lg</h5>
                <button :dismissable="true" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </model-header>
              <model-body>
              </model-body>
              <model-footer>
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
              </model-footer>
            </modal>
              <modal id="exampleModalFullscreenXl" tabindex="-1" title="Create Post" aria-labelledby="exampleModalFullscreenXlLabel" aria-hidden="true" dialogClass="modal-fullscreen-xl-down">
              <model-header>
                <h5 class="modal-title" id="exampleModalFullscreenXlLabel">Full screen below xl</h5>
                <button :dismissable="true" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </model-header>
              <model-body>
              </model-body>
              <model-footer>
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
              </model-footer>
            </modal>
              <modal id="exampleModalFullscreenXxl" tabindex="-1" title="Create Post" aria-labelledby="exampleModalFullscreenXxlLabel" aria-hidden="true" dialogClass="modal-fullscreen-xxl-down">
              <model-header>
                <h5 class="modal-title" id="exampleModalFullscreenXxlLabel">Full screen below Xxl</h5>
                <button :dismissable="true" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </model-header>
              <model-body>
              </model-body>
              <model-footer>
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
              </model-footer>
            </modal>
          </template>
        </iq-card>
      </div>
    </div>
</template>
<script>
// import { socialvue } from '../../config/pluginInit'

export default {
  name: 'UiModal',
  mounted () {
    // socialvue.index()
  }
}
</script>
