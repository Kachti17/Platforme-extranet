<template>
    <div class="row">
      <div class="col-sm-12">
          <div class="card position-relative inner-page-bg bg-primary" style="height: 150px;">
            <div class="inner-page-title">
                <h3 class="text-white">Breadcrumb Page</h3>
                <p class="text-white">lorem ipsum</p>
            </div>
          </div>
      </div>
      <div class="col-lg-6 col-sm-12">
        <iq-card>
          <template v-slot:headerTitle>
            <h4 class="card-title">Breadcrumb</h4>
          </template>
          <template v-slot:headerAction>
          <collapse className="text-primary float-right"  data-bs-toggle="collapse" collapseTarget="example-collapse" ariaControls="example-collapse">
            <i class="ri-code-s-slash-line" />
          </collapse>
          </template>
          <template v-slot:body>
            <p>Use the items in order to programatically generate the breadcrumb links.use class <code>.breadcrumb to ol</code></p>
            <collapse-content id="example-collapse" className="mb-2">
              <div class="card">
                <kbd class="bg-dark">
                  <pre class="text-white" id="breadcrumb-1">
                    <code>
&lt;nav aria-label=&quot;breadcrumb &quot;&gt;
&lt;ol class=&quot;breadcrumb bg-soft-primary&quot;&gt;
&lt;li class=&quot;breadcrumb-item active&quot; aria-current=&quot;page&quot;&gt;Home&lt;/li&gt;
&lt;/ol&gt; &lt;/nav&gt; &lt;nav aria-label=&quot;breadcrumb&quot;&gt;
&lt;ol class=&quot;breadcrumb bg-soft-primary&quot;&gt;
&lt;li class=&quot;breadcrumb-item&quot;&gt;&lt;a href=&quot;#&quot; &gt;Home&lt;/a&gt;&lt;/li&gt;
&lt;li class=&quot;breadcrumb-item active&quot; aria-current=&quot;page&quot;&gt;Library&lt;/li&gt;
&lt;/ol&gt;
&lt;/nav&gt;
&lt;nav aria-label=&quot;breadcrumb&quot;&gt;
&lt;ol class=&quot;breadcrumb bg-soft-primary mb-0&quot;&gt;
&lt;li class=&quot;breadcrumb-item&quot;&gt;&lt;a href=&quot;#&quot;&gt;Home&lt;/a&gt;&lt;/li&gt;
&lt;li class=&quot;breadcrumb-item&quot;&gt;&lt;a href=&quot;#&quot;&gt;Library&lt;/a&gt;&lt;/li&gt;
&lt;li class=&quot;breadcrumb-item active&quot; aria-current=&quot;page&quot;&gt;Data&lt;/li&gt;
&lt;/ol&gt;
&lt;/nav&gt;

&lt;script&gt;
export default {
  data() {
    return {
      items1: [
        {
          text: 'Home',
          active: true
        }
      ],
      items2: [
        {
          text: 'Home',
          href: '#'
        },
        {
          text: 'Library',
          active: true
        }
      ],
      items3: [
        {
          text: 'Home',
          href: '#'
        },
        {
          text: 'Library',
          href: '#'
        },
        {
          text: 'Data',
          active: true
        }
      ]
    }
  }
}
</code></pre>
                </kbd>
              </div>
            </collapse-content>
            <nav aria-label="breadcrumb ">
              <ol class="breadcrumb bg-soft-primary">
                <li class="breadcrumb-item active" aria-current="page">Home</li>
              </ol>
            </nav>
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb bg-soft-primary">
                <li class="breadcrumb-item"><a href="#" >Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Library</li>
              </ol>
            </nav>
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb bg-soft-primary mb-0">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item"><a href="#">Library</a></li>
                <li class="breadcrumb-item active" aria-current="page">Data</li>
              </ol>
            </nav>
          </template>
        </iq-card>
      </div>
      <div class="col-lg-6 col-sm-12">
        <iq-card>
          <template v-slot:headerTitle>
            <h4 class="card-title">Breadcrumb With Icon</h4>
          </template>
          <template v-slot:headerAction>
          <collapse className="text-primary float-right"  data-bs-toggle="collapse" collapseTarget="example-collapse1" ariaControls="example-collapse1">
            <i class="ri-code-s-slash-line" />
          </collapse>
          </template>
          <template v-slot:body>
            <p>Use the items in order to programatically generate the breadcrumb links.use class <code>.breadcrumb to ol</code> with Icon</p>
            <collapse-content id="example-collapse1" className="mb-2">
              <div class="card">
                <kbd class="bg-dark">
                  <pre class="text-white" id="breadcrumb-icon-1">
                    <code>
&lt;nav aria-label=&quot;breadcrumb &quot;&gt;
&lt;ol class=&quot;breadcrumb bg-soft-primary&quot;&gt;
&lt;li class=&quot;breadcrumb-item active&quot; aria-current=&quot;page&quot;&gt;&lt;i class=&quot;ri-home-4-line me-1 float-start&quot;&gt;&lt;/i&gt;Home&lt;/li&gt;
&lt;/ol&gt;
&lt;/nav&gt;
&lt;nav aria-label=&quot;breadcrumb&quot;&gt;
&lt;ol class=&quot;breadcrumb bg-soft-primary&quot;&gt;
&lt;li class=&quot;breadcrumb-item&quot;&gt;&lt;a href=&quot;#&quot;&gt;&lt;i class=&quot;ri-home-4-line me-1 float-start&quot;&gt;&lt;/i&gt;Home&lt;/a&gt;&lt;/li&gt;
&lt;li class=&quot;breadcrumb-item active&quot; aria-current=&quot;page&quot;&gt;Library&lt;/li&gt;
&lt;/ol&gt;
&lt;/nav&gt;
&lt;nav aria-label=&quot;breadcrumb&quot;&gt;
&lt;ol class=&quot;breadcrumb bg-soft-primary mb-0&quot;&gt;
&lt;li class=&quot;breadcrumb-item&quot;&gt;&lt;a href=&quot;#&quot;&gt;&lt;i class=&quot;ri-home-4-line me-1 float-start&quot;&gt;&lt;/i&gt;Home&lt;/a&gt;&lt;/li&gt;
&lt;li class=&quot;breadcrumb-item&quot;&gt;&lt;a href=&quot;#&quot;&gt;Library&lt;/a&gt;&lt;/li&gt; &lt;li class=&quot;breadcrumb-item active&quot; aria-current=&quot;page&quot;&gt;Data&lt;/li&gt;
&lt;/ol&gt;
&lt;/nav&gt;
&lt;script&gt;
export default {
  data() {
    return {
      itemsIcon1: [
        {
          html: '&lt;i class="ri-home-4-line mr-1 float-left"&gt;&lt;/i&gt;Home',
          active: true
        }
      ],
      itemsIcon2: [
        {
          html: '&lt;i class="ri-home-4-line mr-1 float-left"&gt;&lt;/i&gt;Home',
          href: '#'
        },
        {
          text: 'Library',
          active: true
        }
      ],
      itemsIcon3: [
        {
          html: '&lt;i class="ri-home-4-line mr-1 float-left"&gt;&lt;/i&gt;Home',
          href: '#'
        },
        {
          text: 'Library',
          href: '#'
        },
        {
          text: 'Data',
          active: true
        }
      ]
    }
  }
}
</code></pre>
                </kbd>
              </div>
            </collapse-content>
            <nav aria-label="breadcrumb ">
              <ol class="breadcrumb bg-soft-primary">
 <li class="breadcrumb-item active d-flex" aria-current="page"><i class="material-symbols-outlined me-1">home</i>Home</li>
              </ol>
            </nav>
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb bg-soft-primary">
                <li class="breadcrumb-item"><a href="#"><i class="material-symbols-outlined me-1">home</i> </a> </li>
                <li class="breadcrumb-item active" aria-current="page">Library</li>
              </ol>
            </nav>
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb bg-soft-primary mb-0">
                <li class="breadcrumb-item"><a href="#"><i class="material-symbols-outlined me-1">home</i></a></li>
                <li class="breadcrumb-item"><a href="#">Library</a></li>
                <li class="breadcrumb-item active" aria-current="page">Data</li>
              </ol>
            </nav>
          </template>
        </iq-card>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-6 col-sm-12">
        <iq-card>
          <template v-slot:headerTitle>
            <h4 class="card-title">Breadcrumb</h4>
          </template>
          <template v-slot:headerAction>
          <collapse className="text-primary float-right"  data-bs-toggle="collapse" collapseTarget="example-collapse2" ariaControls="example-collapse2">
            <i class="ri-code-s-slash-line" />
          </collapse>
          </template>
          <template v-slot:body>
            <p>use class <code>.breadcrumb .bg-primary</code></p>
            <collapse-content id="example-collapse2" className="mb-2">
              <div class="card">
                <kbd class="bg-dark">
                  <pre class="text-white" id="breadcrumb-2">
                    <code>
  &#x3C;nav aria-label=&#x22;breadcrumb &#x22;&#x3E;
  &#x3C;ol class=&#x22;breadcrumb bg-primary&#x22;&#x3E;
    &#x3C;li class=&#x22;breadcrumb-item active text-white&#x22; aria-current=&#x22;page&#x22;&#x3E;Home&#x3C;/li&#x3E;
  &#x3C;/ol&#x3E;
  &#x3C;/nav&#x3E;
  &#x3C;nav aria-label=&#x22;breadcrumb&#x22;&#x3E;
  &#x3C;ol class=&#x22;breadcrumb bg-primary&#x22;&#x3E;
    &#x3C;li class=&#x22;breadcrumb-item&#x22;&#x3E;&#x3C;a href=&#x22;#&#x22; class=&#x22;text-white&#x22;&#x3E;Home&#x3C;/a&#x3E;&#x3C;/li&#x3E;
    &#x3C;li class=&#x22;breadcrumb-item active text-white&#x22; aria-current=&#x22;page&#x22;&#x3E;Library&#x3C;/li&#x3E;
  &#x3C;/ol&#x3E;
  &#x3C;/nav&#x3E;
  &#x3C;nav aria-label=&#x22;breadcrumb&#x22;&#x3E;
  &#x3C;ol class=&#x22;breadcrumb bg-primary mb-0&#x22;&#x3E;
    &#x3C;li class=&#x22;breadcrumb-item&#x22;&#x3E;&#x3C;a href=&#x22;#&#x22; class=&#x22;text-white&#x22;&#x3E;Home&#x3C;/a&#x3E;&#x3C;/li&#x3E;
    &#x3C;li class=&#x22;breadcrumb-item&#x22;&#x3E;&#x3C;a href=&#x22;#&#x22; class=&#x22;text-white&#x22;&#x3E;Library&#x3C;/a&#x3E;&#x3C;/li&#x3E;
    &#x3C;li class=&#x22;breadcrumb-item active text-white&#x22; aria-current=&#x22;page&#x22;&#x3E;Data&#x3C;/li&#x3E;
  &#x3C;/ol&#x3E;
  &#x3C;/nav&#x3E;
  </code></pre>
                </kbd>
              </div>
            </collapse-content>
            <nav aria-label="breadcrumb ">
              <ol class="breadcrumb bg-primary">
                <li class="breadcrumb-item active text-white" aria-current="page">Home</li>
              </ol>
            </nav>
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb bg-primary">
                <li class="breadcrumb-item"><a href="#" class="text-white">Home</a></li>
                <li class="breadcrumb-item active text-white" aria-current="page">Library</li>
              </ol>
            </nav>
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb bg-primary mb-0">
                <li class="breadcrumb-item"><a href="#" class="text-white">Home</a></li>
                <li class="breadcrumb-item"><a href="#" class="text-white">Library</a></li>
                <li class="breadcrumb-item active text-white" aria-current="page">Data</li>
              </ol>
            </nav>
          </template>
        </iq-card>
      </div>
      <div class="col-lg-6 col-sm-12">
        <iq-card>
          <template v-slot:headerTitle>
            <h4 class="card-title">Breadcrumb With Icon</h4>
          </template>
          <template v-slot:headerAction>
          <collapse className="text-primary float-right"  data-bs-toggle="collapse" collapseTarget="example-collapse3" ariaControls="example-collapse3">
            <i class="ri-code-s-slash-line" />
          </collapse>
          </template>
          <template v-slot:body>
            <p>use class <code>.breadcrumb .bg-primary </code> With Icon.</p>
            <collapse-content id="example-collapse3" className="mb-2">
              <div class="card">
                <kbd class="bg-dark">
                  <pre class="text-white" id="breadcrumb-icon-2">
                    <code>
  &#x3C;nav aria-label=&#x22;breadcrumb&#x22;&#x3E;
  &#x3C;ol class=&#x22;breadcrumb bg-primary&#x22;&#x3E;
    &#x3C;li class=&#x22;breadcrumb-item active text-white&#x22; aria-current=&#x22;page&#x22;&#x3E;&#x3C;i class=&#x22;ri-home-4-line mr-1 float-left&#x22;&#x3E;&#x3C;/i&#x3E;Home&#x3C;/li&#x3E;
  &#x3C;/ol&#x3E;
  &#x3C;/nav&#x3E;
  &#x3C;nav aria-label=&#x22;breadcrumb&#x22;&#x3E;
  &#x3C;ol class=&#x22;breadcrumb bg-primary&#x22;&#x3E;
    &#x3C;li class=&#x22;breadcrumb-item&#x22;&#x3E;&#x3C;a href=&#x22;#&#x22; class=&#x22;text-white&#x22;&#x3E;&#x3C;i class=&#x22;ri-home-4-line mr-1 float-left&#x22;&#x3E;&#x3C;/i&#x3E;Home&#x3C;/a&#x3E;&#x3C;/li&#x3E;
    &#x3C;li class=&#x22;breadcrumb-item active text-white&#x22; aria-current=&#x22;page&#x22;&#x3E;Library&#x3C;/li&#x3E;
  &#x3C;/ol&#x3E;
  &#x3C;/nav&#x3E;
  &#x3C;nav aria-label=&#x22;breadcrumb&#x22;&#x3E;
  &#x3C;ol class=&#x22;breadcrumb bg-primary mb-0&#x22;&#x3E;
    &#x3C;li class=&#x22;breadcrumb-item&#x22;&#x3E;&#x3C;a href=&#x22;#&#x22; class=&#x22;text-white&#x22;&#x3E;&#x3C;i class=&#x22;ri-home-4-line mr-1 float-left&#x22;&#x3E;&#x3C;/i&#x3E;Home&#x3C;/a&#x3E;&#x3C;/li&#x3E;
    &#x3C;li class=&#x22;breadcrumb-item&#x22;&#x3E;&#x3C;a href=&#x22;#&#x22; class=&#x22;text-white&#x22;&#x3E;Library&#x3C;/a&#x3E;&#x3C;/li&#x3E;
    &#x3C;li class=&#x22;breadcrumb-item active text-white&#x22; aria-current=&#x22;page&#x22;&#x3E;Data&#x3C;/li&#x3E;
  &#x3C;/ol&#x3E;
  &#x3C;/nav&#x3E;
  </code></pre>
                </kbd>
              </div>
            </collapse-content>
            <nav aria-label="breadcrumb">
                           <ol class="breadcrumb bg-primary">
                              <li class="d-flex breadcrumb-item active text-white" aria-current="page"><i class="material-symbols-outlined me-1">home</i>Home</li>
                           </ol>
                        </nav>
                        <nav aria-label="breadcrumb">
                           <ol class="breadcrumb bg-primary">
                              <li class="breadcrumb-item"><a href="#" class="text-white"><i class="material-symbols-outlined me-1">home</i></a></li>
                              <li class="breadcrumb-item active text-white" aria-current="page">Library</li>
                           </ol>
                        </nav>
                        <nav aria-label="breadcrumb">
                           <ol class="breadcrumb bg-primary mb-0">
                              <li class="breadcrumb-item"><a href="#" class="text-white"><i class="material-symbols-outlined me-1">home</i></a></li>
                              <li class="breadcrumb-item"><a href="#" class="text-white">Library</a></li>
                              <li class="breadcrumb-item active text-white" aria-current="page">Data</li>
                           </ol>
                        </nav>
          </template>
        </iq-card>
      </div>
      <div class="col-lg-6 col-sm-12">
        <iq-card>
          <template v-slot:headerTitle>
            <h4 class="card-title">Breadcrumb With Icon</h4>
          </template>
          <template v-slot:headerAction>
          <collapse className="text-primary float-right"  data-bs-toggle="collapse" collapseTarget="example-collapse4" ariaControls="example-collapse4">
            <i class="ri-code-s-slash-line" />
          </collapse>
          </template>
          <template v-slot:body>
            <p>use class <code>.breadcrumb .iq-bg-primary</code></p>
            <collapse-content id="example-collapse4" className="mb-2">
              <div class="card">
                <kbd class="bg-dark">
                  <pre class="text-white" id="breadcrumb-icon-3">
                    <code>
&lt;b-breadcrumb class="iq-bg-primary" :items="itemsIcon1" /&gt;
&lt;b-breadcrumb class="iq-bg-primary" :items="itemsIcon2" /&gt;
&lt;b-breadcrumb class="iq-bg-primary" :items="itemsIcon3" /&gt;

&lt;script&gt;
export default {
  data() {
    return {
      itemsIcon1: [
        {
          html: '&lt;i class="ri-home-4-line mr-1 float-left"&gt;&lt;/i&gt;Home',
          active: true
        }
      ],
      itemsIcon2: [
        {
          html: '&lt;i class="ri-home-4-line mr-1 float-left"&gt;&lt;/i&gt;Home',
          href: '#'
        },
        {
          text: 'Library',
          active: true
        }
      ],
      itemsIcon3: [
        {
          html: '&lt;i class="ri-home-4-line mr-1 float-left"&gt;&lt;/i&gt;Home',
          href: '#'
        },
        {
          text: 'Library',
          href: '#'
        },
        {
          text: 'Data',
          active: true
        }
      ]
    }
  }
}
</code></pre>
                </kbd>
              </div>
            </collapse-content>
            <nav aria-label="breadcrumb">
                           <ol class="breadcrumb bg-soft-primary">
                              <li class="d-flex breadcrumb-item active" aria-current="page"><i class="material-symbols-outlined me-1">home</i>Home</li>
                           </ol>
                        </nav>
                        <nav aria-label="breadcrumb">
                           <ol class="breadcrumb bg-soft-primary">
                              <li class="breadcrumb-item"><a href="#"><i class="material-symbols-outlined me-1">home</i></a></li>
                              <li class="breadcrumb-item active" aria-current="page">Library</li>
                           </ol>
                        </nav>
                        <nav aria-label="breadcrumb">
                           <ol class="breadcrumb bg-soft-primary">
                              <li class="breadcrumb-item"><a href="#"><i class="material-symbols-outlined me-1">home</i></a></li>
                              <li class="breadcrumb-item"><a href="#">Library</a></li>
                              <li class="breadcrumb-item active" aria-current="page">Data</li>
                           </ol>
                        </nav>
          </template>
        </iq-card>
      </div>
      <div class="col-lg-6 col-sm-12">
        <iq-card>
          <template v-slot:headerTitle>
            <h4 class="card-title">Breadcrumb With Icon</h4>
          </template>
          <template v-slot:headerAction>
          <collapse className="text-primary float-right"  data-bs-toggle="collapse" collapseTarget="example-collapse5" ariaControls="example-collapse5">
            <i class="ri-code-s-slash-line" />
          </collapse>
          </template>
          <template v-slot:body>
            <p>use class <code>.breadcrumb .iq-bg-danger</code></p>
            <collapse-content id="example-collapse5" className="mb-2">
              <div class="card">
                <kbd class="bg-dark">
                  <pre class="text-white" id="breadcrumb-icon-4">
                    <code>
&#x3C;nav aria-label=&#x22;breadcrumb&#x22;&#x3E;
    &#x3C;ol class=&#x22;breadcrumb iq-bg-danger&#x22;&#x3E;
      &#x3C;li class=&#x22;breadcrumb-item active&#x22; aria-current=&#x22;page&#x22;&#x3E;&#x3C;i class=&#x22;ri-home-4-line mr-1 float-left&#x22;&#x3E;&#x3C;/i&#x3E;Home&#x3C;/li&#x3E;
    &#x3C;/ol&#x3E;
  &#x3C;/nav&#x3E;
  &#x3C;nav aria-label=&#x22;breadcrumb&#x22;&#x3E;
    &#x3C;ol class=&#x22;breadcrumb iq-bg-danger&#x22;&#x3E;
      &#x3C;li class=&#x22;breadcrumb-item&#x22;&#x3E;&#x3C;a href=&#x22;#&#x22; class=&#x22;text-danger&#x22;&#x3E;&#x3C;i class=&#x22;ri-home-4-line mr-1 float-left&#x22;&#x3E;&#x3C;/i&#x3E;Home&#x3C;/a&#x3E;&#x3C;/li&#x3E;
      &#x3C;li class=&#x22;breadcrumb-item active&#x22; aria-current=&#x22;page&#x22;&#x3E;Library&#x3C;/li&#x3E;
    &#x3C;/ol&#x3E;
  &#x3C;/nav&#x3E;
  &#x3C;nav aria-label=&#x22;breadcrumb&#x22;&#x3E;
    &#x3C;ol class=&#x22;breadcrumb iq-bg-danger mb-0&#x22;&#x3E;
      &#x3C;li class=&#x22;breadcrumb-item&#x22;&#x3E;&#x3C;a href=&#x22;#&#x22; class=&#x22;text-danger&#x22;&#x3E;&#x3C;i class=&#x22;ri-home-4-line mr-1 float-left&#x22;&#x3E;&#x3C;/i&#x3E;Home&#x3C;/a&#x3E;&#x3C;/li&#x3E;
      &#x3C;li class=&#x22;breadcrumb-item&#x22;&#x3E;&#x3C;a href=&#x22;#&#x22; class=&#x22;text-danger&#x22;&#x3E;Library&#x3C;/a&#x3E;&#x3C;/li&#x3E;
      &#x3C;li class=&#x22;breadcrumb-item active&#x22; aria-current=&#x22;page&#x22;&#x3E;Data&#x3C;/li&#x3E;
    &#x3C;/ol&#x3E;
  &#x3C;/nav&#x3E;
</code></pre>
                </kbd>
              </div>
            </collapse-content>
            <nav aria-label="breadcrumb bg-soft-danger">
                           <ol class="breadcrumb bg-soft-danger">
                              <li class="d-flex breadcrumb-item active" aria-current="page"><i class="material-symbols-outlined me-1">home</i>Home</li>
                           </ol>
                        </nav>
                        <nav aria-label="breadcrumb bg-soft-danger">
                           <ol class="breadcrumb bg-soft-danger">
                              <li class="breadcrumb-item"><a href="#" class="text-danger"><i class="material-symbols-outlined me-1">home</i></a></li>
                              <li class="breadcrumb-item active" aria-current="page">Library</li>
                           </ol>
                        </nav>
                        <nav aria-label="breadcrumb bg-soft-danger">
                           <ol class="breadcrumb bg-soft-danger">
                              <li class="breadcrumb-item"><a href="#" class="text-danger"><i class="material-symbols-outlined me-1">home</i></a></li>
                              <li class="breadcrumb-item"><a href="#" class="text-danger">Library</a></li>
                              <li class="breadcrumb-item active" aria-current="page">Data</li>
                           </ol>
                        </nav>
          </template>
        </iq-card>
      </div>
    </div>
</template>
<script>
// import { socialvue } from '../../config/pluginInit'

export default {
  name: 'UiBreadcrumb',
  mounted () {
    // socialvue.index()
  },
  data () {
    return {
      items1: [
        {
          text: 'Home',
          active: true
        }
      ],
      items2: [
        {
          text: 'Home',
          href: '#'
        },
        {
          text: 'Library',
          active: true
        }
      ],
      items3: [
        {
          text: 'Home',
          href: '#'
        },
        {
          text: 'Library',
          href: '#'
        },
        {
          text: 'Data',
          active: true
        }
      ],
      itemsIcon1: [
        {
          html: '<i class="ri-home-4-line mr-1 float-left"></i>Home',
          active: true
        }
      ],
      itemsIcon2: [
        {
          html: '<i class="ri-home-4-line mr-1 float-left"></i>Home',
          href: '#'
        },
        {
          text: 'Library',
          active: true
        }
      ],
      itemsIcon3: [
        {
          html: '<i class="ri-home-4-line mr-1 float-left"></i>Home',
          href: '#'
        },
        {
          text: 'Library',
          href: '#'
        },
        {
          text: 'Data',
          active: true
        }
      ]
    }
  }
}
</script>
