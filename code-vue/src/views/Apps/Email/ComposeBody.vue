<template>
  <div class="card iq-border-radius-20">
    <div class="card-body">
      <div class="row">
        <div class="col-md-12 mb-3">
          <h5 class="text-primary card-title d-flex gap-1">
                              <span class="material-symbols-outlined">drive_file_rename_outline</span>
                              Compose Message
                           </h5>
          <button type="submit" class="float-end close-popup" v-if="modal" @click="close" data-dismiss="modal"><i class="ri-close-fill"></i></button>
        </div>
      </div>
        <form class="email-form">
          <div class="form-group row">
              <label for="inputEmail3" class="col-sm-2 col-form-label">To:</label>
              <div class="col-sm-10">
                  <select  id="inputEmail3" class="select2jsMultiSelect form-control" >
                      <option value=""></option>
                      <option value="Petey Cruiser">Petey Cruiser</option>
                      <option value="Bob Frapples">Bob Frapples</option>
                      <option value="Barb Ackue">Barb Ackue</option>
                      <option value="Greta Life">Greta Life</option>
                  </select>
              </div>
          </div>
          <div class="form-group row">
              <label for="cc" class="col-sm-2 col-form-label">Cc:</label>
              <div class="col-sm-10">
                  <select  id="cc" class="select2jsMultiSelect form-control">
                    <option value=""></option>
                      <option value="Brock Lee">Brock Lee</option>
                      <option value="Rick O'Shea">Rick O'Shea</option>
                      <option value="Cliff Hanger">Cliff Hanger</option>
                      <option value="Barb Dwyer">Barb Dwyer</option>
                  </select>
              </div>
          </div>
          <div class="form-group row">
              <label for="subject" class="col-sm-2 col-form-label">Subject:</label>
              <div class="col-sm-10">
                  <input type="text"  id="subject" class="form-control">
              </div>
          </div>
          <div class="form-group row">
              <label for="subject" class="col-sm-2 col-form-label">Your Message:</label>
              <div class="col-md-10">
                  <textarea class="textarea form-control" rows="5">Next, use our Get Started docs to setup Tiny!</textarea>
              </div>
          </div>
          <div class="form-group d-flex flex-wrap align-items-center justify-content-between mb-0">
              <div class="d-flex flex-wrap flex-grow-1 align-items-center">
                  <div class="send-btn pl-3 mb-2">
                      <button type="submit" class="btn btn-primary">Send</button>
                  </div>
                  <div class="send-panel">
                    <label class="ms-2 mb-0 bg-soft-primary rounded" for="file"> <input type="file" id="file" style="display: none"> <a href="#" class="material-symbols-outlined writ-icon text-primary">
                    attachment
                    </a> </label>
                    <label class="ms-2 mb-0 bg-soft-primary rounded"> <a href="#" class="material-symbols-outlined text-primary">
                    place
                    </a>  </label>
                    <label class="ms-2 mb-0 bg-soft-primary rounded"> <a href="#" class="material-symbols-outlined text-primary">
                    add_to_drive
                    </a>  </label>
                    <label class="ms-2 mb-0 bg-soft-primary rounded"> <a href="#" class="material-symbols-outlined text-primary">
                    photo_camera
                    </a>  </label>
                    <label class="ms-2 mb-0 bg-soft-primary rounded"> <a href="#" class="material-symbols-outlined text-primary">
                    sentiment_satisfied
                    </a>  </label>
                  </div>
              </div>
              <div class="d-flex align-items-center">
                <div class="send-panel float-right">
                    <label class="ms-2 mb-0 bg-soft-primary rounded" ><a href="#" class="material-symbols-outlined text-primary">
                    settings
                    </a></label>
                    <label class="ms-2 mb-0 bg-soft-primary rounded"><a href="#" class="material-symbols-outlined">
                    delete
                    </a>  </label>
                </div>
              </div>
          </div>
        </form>
  
    </div>
  </div>
</template>
<script>
export default {
  name: 'ComposeBody',
  props: {
    modal: { type: Boolean, default: false }
  },
  data () {
    return {
      singleSelect: '',
      singleSelect1: '',
      singleOption: [
        { id: 1, text: 'Java' },
        { id: 2, text: 'PHP' },
        { id: 3, text: 'JavaScript' },
        { id: 4, text: 'Visual Basics' }
      ],
      singleOption1: [
        { id: 1, text: 'Red' },
        { id: 2, text: 'Green' },
        { id: 3, text: 'Blue' },
        { id: 4, text: 'Yellow' }
      ]
    }
  },
  methods: {
    close () {
      this.$emit('close', false)
    }
  }
}
</script>
