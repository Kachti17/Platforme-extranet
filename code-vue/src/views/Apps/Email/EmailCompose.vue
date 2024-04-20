<template>
    <div class="row-eq-height">
      <div class="col-md-12">
        <div class="row">
          <div class="col-md-12">
            <ComposeBody />
          </div>
        </div>
      </div>
    </div>
</template>
<script>
import ComposeBody from './ComposeBody'
// import { socialvue } from '../../../config/pluginInit'
export default {
  name: 'EmailCompose',
  components: { ComposeBody },
  mounted () {
    // socialvue.index()
  }
}
</script>
