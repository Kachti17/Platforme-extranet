<template>
    <div class="row">
      <div class="col-sm-12">
          <div class="card position-relative inner-page-bg bg-primary" style="height: 150px;">
            <div class="inner-page-title">
                <h3 class="text-white">Tooltips Page</h3>
                <p class="text-white">lorem ipsum</p>
            </div>
          </div>
      </div>
      <div class="col-lg-6 col-sm-12">
        <iq-card>
          <template v-slot:headerTitle>
            <h4 class="card-title">Tooltips</h4>
          </template>
          <template v-slot:headerAction>
            <a class="text-primary float-right"  role="button">
              <i class="ri-code-s-slash-line" />
            </a>
          </template>
          <template v-slot:body>
            <p>Hover over the buttons below to see the four tooltips directions: top, right, bottom, and left. The data-placement attribute specifies the tooltip position.</p>
            <!-- Coming Soon -->
            <tooltip className="btn btn-secondary mt-3 me-1" data-bs-toggle="tooltip" data-bs-placement="top" tooltipPlacement="top"         title="Tooltip on top"    >Tooltip on top</tooltip>
            <tooltip className="btn btn-secondary mt-3 me-1" data-bs-toggle="tooltip" data-bs-placement="right" tooltipPlacement="right"     title="Tooltip on right"  >Tooltip on right</tooltip>
            <tooltip className="btn btn-secondary mt-3 me-1" data-bs-toggle="tooltip" data-bs-placement="bottom"  tooltipPlacement="bottom"  title="Tooltip on bottom" >Tooltip on bottom</tooltip>
            <tooltip className="btn btn-secondary mt-3 me-1" data-bs-toggle="tooltip" data-bs-placement="left"  tooltipPlacement="left"      title="Tooltip on left"   >Tooltip on left</tooltip>
          </template>
        </iq-card>
        <iq-card>
          <template v-slot:headerTitle>
            <h4 class="card-title">Disabled elements</h4>
          </template>
          <template v-slot:headerAction>
            <a class="text-primary float-right"  role="button">
              <i class="ri-code-s-slash-line" />
            </a>
          </template>
          <template v-slot:body>
            <p>Elements with the <code>disabled</code> attribute aren’t interactive, meaning users cannot focus, hover, or click them to trigger a tooltip (or popover). As a workaround, you’ll want to trigger the tooltip from a wrapper <code>&lt;div&gt;</code> or <code>&lt;span&gt;</code>, ideally made keyboard-focusable using <code>tabindex="0"</code>, and override the <code>pointer-events</code> on the disabled element.</p>
            <span class="d-inline-block" tabindex="0"  title="Disabled tooltip">
              <tooltip className="btn btn-primary mt-3" data-bs-toggle="tooltip" data-bs-placement="top" tooltipPlacement="top" title="Tooltip on top" Disabled>Disabled button</tooltip>
            </span>
          </template>
        </iq-card>
      </div>
      <div class="col-lg-6 col-sm-12">
        <iq-card>
          <template v-slot:headerTitle>
            <h4 class="card-title">Tooltips</h4>
          </template>
          <template v-slot:headerAction>
            <a class="text-primary float-right"  role="button">
              <i class="ri-code-s-slash-line" />
            </a>
          </template>
          <template v-slot:body>
            <p>Hover over the buttons below to see the four tooltips directions: top, right, bottom, and left Using background colors</p>
            <tooltip className="btn btn-primary mt-3 me-1" data-bs-toggle="tooltip" data-bs-placement="top" tooltipPlacement="top"         title="Tooltip on top"   >Tooltip on top</tooltip>
            <tooltip className="btn btn-success mt-3 me-1" data-bs-toggle="tooltip" data-bs-placement="right" tooltipPlacement="right"     title="Tooltip on right" >Tooltip on right</tooltip>
            <tooltip className="btn btn-danger mt-3 me-1" data-bs-toggle="tooltip" data-bs-placement="bottom"  tooltipPlacement="bottom"  title="Tooltip on bottom">Tooltip on bottom</tooltip>
            <tooltip className="btn btn-info mt-3 me-1" data-bs-toggle="tooltip" data-bs-placement="left"  tooltipPlacement="left"      title="Tooltip on left"  >Tooltip on left</tooltip>
          </template>
        </iq-card>
        <iq-card>
          <template v-slot:headerTitle>
            <h4 class="card-title">Tooltips</h4>
          </template>
          <template v-slot:headerAction>
            <a class="text-primary float-right"  role="button">
              <i class="ri-code-s-slash-line" />
            </a>
          </template>
          <template v-slot:body>
            <p>Hover over the buttons below to see the four tooltips directions: top, right, bottom, and left Using Light background colors</p>
            <tooltip className="btn btn-soft-primary mt-3 me-1" data-bs-toggle="tooltip" data-bs-placement="top" tooltipPlacement="top"         title="Tooltip on top"   >Tooltip on top</tooltip>
            <tooltip className="btn btn-soft-success mt-3 me-1" data-bs-toggle="tooltip" data-bs-placement="right" tooltipPlacement="right"     title="Tooltip on right" >Tooltip on right</tooltip>
            <tooltip className="btn btn-soft-danger mt-3 me-1" data-bs-toggle="tooltip" data-bs-placement="bottom"  tooltipPlacement="bottom"  title="Tooltip on bottom">Tooltip on bottom</tooltip>
            <tooltip className="btn btn-soft-info mt-3 me-1" data-bs-toggle="tooltip" data-bs-placement="left"  tooltipPlacement="left"      title="Tooltip on left"  >Tooltip on left</tooltip>
          </template>
        </iq-card>
      </div>
      <div class="col-lg-12">
        <iq-card>
          <template v-slot:headerTitle>
            <h4 class="card-title">Hover elements</h4>
          </template>
          <template v-slot:headerAction>
            <a class="text-primary float-right"  role="button">
              <i class="ri-code-s-slash-line" />
            </a>
          </template>
          <template v-slot:body>
            <p>Hover over the buttons below to see the tooltip.</p>
            <tooltip tag="a" href="#" data-bs-toggle="tooltip" title="Tooltip on left">Hover over me</tooltip>
          </template>
        </iq-card>
      </div>
    </div>
</template>
<script>
// import { socialvue } from '../../config/pluginInit'

export default {
  name: 'UiTooltips',
  mounted () {
    // socialvue.index()
  }
}
</script>
