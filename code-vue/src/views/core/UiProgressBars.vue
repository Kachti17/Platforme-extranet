<template>
    <div class="row">
      <div class="col-sm-12">
          <div class="card position-relative inner-page-bg bg-primary" style="height: 150px;">
            <div class="inner-page-title">
                <h3 class="text-white">ProgressBar Page</h3>
                <p class="text-white">lorem ipsum</p>
            </div>
          </div>
      </div>
      <div class="col-lg-6 col-sm-12">
        <iq-card>
          <template v-slot:headerTitle>
            <h4 class="card-title">Examples</h4>
          </template>
          <template v-slot:headerAction>
            <a class="text-primary float-right"  role="button">
              <i class="ri-code-s-slash-line" />
            </a>
          </template>
          <template v-slot:body>
            <p>Progress components are built with two HTML elements, some CSS to set the width, and a few attributes. We don’t use <a href="https://developer.mozilla.org/en-US/docs/Web/HTML/Element/progress">the HTML5 <code>&lt;progress&gt;</code> element</a>, ensuring you can stack progress bars, animate them, and place text labels over them.</p>
            <ul>
              <li>We use the <code>.progress</code> as a wrapper to indicate the max value of the progress bar.</li>
              <li>We use the inner <code>.progress-bar</code> to indicate the progress so far.</li>
              <li>The <code>.progress-bar</code> requires an inline style, utility class, or custom CSS to set their width.</li>
              <li>The <code>.progress-bar</code> also requires some <code>role</code> and <code>aria</code> attributes to make it accessible.</li>
            </ul>
            <p>Put that all together, and you have the following examples.</p>
            <!-- Coming Soon -->
            <div class="progress mb-3">
              <progressbar  aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></progressbar>
            </div>
            <div class="progress mb-3">
              <progressbar  style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></progressbar>
            </div>
            <div class="progress mb-3">
              <progressbar  style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></progressbar>
            </div>
            <div class="progress mb-3">
              <progressbar  style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></progressbar>
            </div>
            <div class="progress mb-3">
              <progressbar  style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></progressbar>
            </div>
          </template>
        </iq-card>
        <iq-card>
          <template v-slot:headerTitle>
            <h4 class="card-title">Heights</h4>
          </template>
          <template v-slot:headerAction>
            <a class="text-primary float-right"  role="button">
              <i class="ri-code-s-slash-line" />
            </a>
          </template>
          <template v-slot:body>
            <p>We only set a <code>height</code> value on the <code>.progress</code>, so if you change that value the inner <code>.progress-bar</code> will automatically resize accordingly.</p>
            <div class="progress mb-3">
              <progressbar  style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">25%</progressbar>
            </div>
            <div class="progress mb-3">
              <progressbar  style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">50%</progressbar>
            </div>
            <div class="progress mb-3">
              <progressbar  style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">75%</progressbar>
            </div>
            <div class="progress mb-3">
              <progressbar  style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">100%</progressbar>
            </div>
          </template>
        </iq-card>
        <iq-card>
          <template v-slot:headerTitle>
            <h4 class="card-title">Animated stripes</h4>
          </template>
          <template v-slot:headerAction>
            <a class="text-primary float-right"  role="button">
              <i class="ri-code-s-slash-line" />
            </a>
          </template>
          <template v-slot:body>
            <p>The striped gradient can also be animated. Add <code>.progress-bar-animated</code> to <code>.progress-bar</code> to animate the stripes right to left via CSS3 animations.</p>
            <div class="progress mb-3">
              <progressbar className="progress-bar-striped progress-bar-animated bg-primary" style="width: 75%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></progressbar>
            </div>
            <div class="progress mb-3">
              <progressbar  className="progress-bar-striped progress-bar-animated bg-success" style="width: 75%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></progressbar>
            </div>
          </template>
        </iq-card>
      </div>
      <div class="col-lg-6 col-sm-12">
        <iq-card>
          <template v-slot:headerTitle>
            <h4 class="card-title">Labels</h4>
          </template>
          <template v-slot:headerAction>
            <a class="text-primary float-right"  role="button">
              <i class="ri-code-s-slash-line" />
            </a>
          </template>
          <template v-slot:body>
            <p>Add labels to your progress bars by placing text within the <code>.progress-bar</code>.</p>
            <div class="progress mb-3">
              <progressbar  style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">25%</progressbar>
            </div>
            <div class="progress mb-3">
              <progressbar  style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">50%</progressbar>
            </div>
            <div class="progress mb-3">
              <progressbar  style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">75%</progressbar>
            </div>
            <div class="progress mb-3">
              <progressbar  style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">100%</progressbar>
            </div>
          </template>
        </iq-card>
        <iq-card>
          <template v-slot:headerTitle>
            <h4 class="card-title">Backgrounds</h4>
          </template>
          <template v-slot:headerAction>
            <a class="text-primary float-right"  role="button">
              <i class="ri-code-s-slash-line" />
            </a>
          </template>
          <template v-slot:body>
            <p>Use background utility classes to change the appearance of individual progress bars.</p>
            <div class="progress mb-3">
              <progressbar className="bg-success" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></progressbar>
            </div>
            <div class="progress mb-3">
              <progressbar className="bg-info" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></progressbar>
            </div>
            <div class="progress mb-3">
              <progressbar className="bg-warning" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></progressbar>
            </div>
            <div class="progress mb-3">
              <progressbar className="bg-danger" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></progressbar>
            </div>
          </template>
        </iq-card>
        <iq-card>
          <template v-slot:headerTitle>
            <h4 class="card-title">Multiple bars</h4>
          </template>
          <template v-slot:headerAction>
            <a class="text-primary float-right"  role="button">
              <i class="ri-code-s-slash-line" />
            </a>
          </template>
          <template v-slot:body>
            <p>Include multiple progress bars in a progress component if you need.</p>
            <!-- Coming Soon -->
            <div class="progress">
              <progressbar role="progressbar" style="width: 15%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></progressbar>
              <progressbar className="bg-success"  style="width: 30%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></progressbar>
              <progressbar className="bg-info" style="width: 20%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></progressbar>
            </div>
          </template>
        </iq-card>
        <iq-card>
          <template v-slot:headerTitle>
            <h4 class="card-title">Striped</h4>
          </template>
          <template v-slot:headerAction>
            <a class="text-primary float-right"  role="button">
              <i class="ri-code-s-slash-line" />
            </a>
          </template>
          <template v-slot:body>
            <p>Add <code>.progress-bar-striped</code> to any <code>.progress-bar</code> to apply a stripe via CSS gradient over the progress bar’s background color.</p>
            <div class="progress mb-3">
              <progressbar className="progress-bar-striped bg-success" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></progressbar>
            </div>
            <div class="progress mb-3">
              <progressbar className="progress-bar-striped bg-info" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></progressbar>
            </div>
            <div class="progress mb-3">
              <progressbar className="progress-bar-striped bg-warning" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></progressbar>
            </div>
            <div class="progress mb-3">
              <progressbar className="progress-bar-striped bg-danger" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></progressbar>
            </div>
          </template>
        </iq-card>
      </div>
    </div>
</template>
<script>
// import { socialvue } from '../../config/pluginInit'

export default {
  name: 'UiProgressBars',
  mounted () {
    // socialvue.index()
  }
}
</script>
