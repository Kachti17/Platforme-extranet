<template>
  <div class="row">
    <div class="col-lg-6">
      <div class="card">
        <div class="card-header d-flex justify-content-between">
          <div class="header-title">
            <h4 class="card-title">Account Setting</h4>
          </div>
        </div>
        <div class="card-body">
          <div class="acc-edit">
            <form>
              <div class="form-group">
                <label for="uname">User Name:</label>
                <input type="text" class="form-control" id="uname" value="Bni@01">
              </div>
              <div class="form-group">
                <label for="email">Email Id:</label>
                <input type="email" class="form-control" id="email" value="Bnijohn@gmail.com">
              </div>
              <div class="form-group">
                <label for="altemail">Alternate Email:</label>
                <input type="email" class="form-control" id="altemail" value="designtheme@gmail.com">
              </div>
              <div class="form-group">
                <label class="d-block">Language Known:</label>
                <div class="form-check form-check-inline">
                  <input type="checkbox" class="form-check-input" id="english" checked="">
                  <label class="form-check-label" for="english">English</label>
                </div>
                <div class="form-check form-check-inline">
                  <input type="checkbox" class="form-check-input" id="french" checked="">
                  <label class="form-check-label" for="french">French</label>
                </div>
                <div class="form-check form-check-inline">
                  <input type="checkbox" class="form-check-input" id="hindi">
                  <label class="form-check-label" for="hindi">Hindi</label>
                </div>
                <div class="form-check form-check-inline">
                  <input type="checkbox" class="form-check-input" id="spanish" checked="">
                  <label class="form-check-label" for="spanish">Spanish</label>
                </div>
                <div class="form-check form-check-inline">
                  <input type="checkbox" class="form-check-input" id="arabic">
                  <label class="form-check-label" for="arabic">Arabic</label>
                </div>
                <div class="form-check form-check-inline">
                  <input type="checkbox" class="form-check-input" id="italian">
                  <label class="form-check-label" for="italian">Italian</label>
                </div>
              </div>
              <button type="submit" class="btn btn-primary me-2">Submit</button>
              <button type="reset" class="btn bg-soft-danger">Cancle</button>
            </form>
          </div>
        </div>
      </div>
    </div>
    <div class="col-lg-6">
      <div class="card">
        <div class="card-header d-flex justify-content-between">
          <div class="header-title">
            <h4 class="card-title">Social Media</h4>
          </div>
        </div>
        <div class="card-body">
          <div class="acc-edit">
            <form>
              <div class="form-group">
                <label for="facebook">Facebook:</label>
                <input type="text" class="form-control" id="facebook" value="www.facebook.com">
              </div>
              <div class="form-group">
                <label for="twitter">Twitter:</label>
                <input type="text" class="form-control" id="twitter" value="www.twitter.com">
              </div>
              <div class="form-group">
                <label for="google">Google +:</label>
                <input type="text" class="form-control" id="google" value="www.google.com">
              </div>
              <div class="form-group">
                <label for="instagram">Instagram:</label>
                <input type="text" class="form-control" id="instagram" value="www.instagram.com">
              </div>
              <div class="form-group">
                <label for="youtube">You Tube:</label>
                <input type="text" class="form-control" id="youtube" value="www.youtube.com">
              </div>
              <button type="submit" class="btn btn-primary me-2">Submit</button>
              <button type="reset" class="btn bg-soft-danger">Cancle</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>
<script>
// import { socialvue } from '../../config/pluginInit'
export default {
  name: 'AccountSetting',
  mounted () {
    // socialvue.index()
  }
}
</script>
