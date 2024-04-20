<template>
  <div >
    <iq-card  id="post-modal-data" body-class="iq-card iq-card-block iq-card-stretch iq-card-height" >
      <template v-slot:headerTitle >
        <h4 class="card-title">Create post</h4>
      </template>
      <template v-slot:body>
        <div class="d-flex align-items-center">
            <div class="user-img">
            <img class="avatar-60 rounded-circle" src="../../../../assets/images/user/user-1.jpg">
            </div>
            <form  class="post-text ml-3 w-100">
            <input type="text" placeholder="Écrivez quelque chose sur la publication..." class="rounded form-control" v-model="texte" required style="border:none;" data-bs-toggle="modal" data-bs-target="#modals"/>
            </form>
        </div>
        <hr />
         <ul class=" post-opt-block d-flex list-inline m-0 p-0 flex-wrap">
            <li class="me-3 mb-md-0 mb-2"><a href="#" class="btn btn-soft-primary"><img src="../../../../assets/images/small/07.png" alt="icon" class="img-fluid me-2"> Picture</a></li>
            <li class="me-3 mb-md-0 mb-2"><a href="#" class="btn btn-soft-primary"><img src="../../../../assets/images/small/08.png" alt="icon" class="img-fluid me-2"> Video</a></li>
            <li class="me-3 mb-md-0 mb-2"><a href="#" class="btn btn-soft-primary" @click.prevent="showLinkInput = !showLinkInput"><img src="../../../../assets/images/small/09.png" alt="icon" class="img-fluid me-2"> Link</a></li>
            <div v-if="showLinkInput">
              <input type="url" placeholder="Insert the link here..." class="rounded form-control my-2" v-model="lien" style="border:none;">
            </div>
        </ul>
      </template>
      <modal id="modals" dialogClass="modal-fullscreen-sm-down" tabindex="-1" title="Create Post" aria-labelledby="modalsLabel" aria-hidden="true">
        <model-header>
          <h5 class="modal-title" id="modalsLabel">Create Post</h5>
         <a href="javascript:void(0);" class="lh-1" data-bs-dismiss="modal">
                                          <span class="material-symbols-outlined">close</span>
                                       </a>
        </model-header>
        <model-body>
          <div class="d-flex align-items-center">
            <div class="user-img">
              <img src="@/assets/images/user/1.jpg" alt="userimg" class="avatar-60 rounded-circle img-fluid">
            </div>
            <form class="post-text ms-3 w-100" action="javascript:void();">
              <input type="text" class="form-control rounded" placeholder="Write something here..." v-model="texte" required style="border:none;">
            </form>



          </div>
          <br>
          <br>
          <ul class=" post-opt-block d-flex list-inline m-0 p-0 flex-wrap">
            <li class="me-3 mb-md-0 mb-2">
             <label for="input-photo" class="btn btn-soft-primary">
              <img src="../../../../assets/images/small/07.png" alt="icon" class="img-fluid me-2"> Picture
              <input id="input-photo" type="file" ref="image_path" style="display: none;" @change="handleImageChange">
             </label>
            </li>

            <li class="me-3 mb-md-0 mb-2">
              <label for="input-video" class="btn btn-soft-primary">
                <img src="../../../../assets/images/small/08.png" alt="icon" class="img-fluid me-2"> Video
                <input id="input-video" type="file" ref="video_path" style="display: none;" @change="handleVideoChange">
              </label>
            </li>

            <li class="me-3 mb-md-0 mb-2"><a href="#" class="btn btn-soft-primary" @click.prevent="showLinkInput = !showLinkInput"><img src="../../../../assets/images/small/09.png" alt="icon" class="img-fluid me-2"> Link</a></li>
            <div v-if="showLinkInput">
              <input type="url" placeholder="Enter the link here..." class="rounded form-control my-2" v-model="lien" style="border:none;">
            </div>
        </ul>
        <button class="btn btn-primary d-block w-100 mt-3" type="button" @click="createPublication">Create</button>
        </model-body>
      </modal>
      <div v-if="message">{{ message }}</div>
    </iq-card>
  </div>
</template>


<script>
import Post from '../../../../Model/Post'
import axios from 'axios'; // Importez axios pour effectuer des requêtes HTTP

export default {
  name: 'AddSocialPost',
  data () {
    return {
      post: new Post(),
      tab: [
        {
          icon: require('../../../../assets/images/small/07.png'),
          name: ' Photo/Video'
        },
        {
          icon: require('../../../../assets/images/small/08.png'),
          name: ' Tag Friend'
        },
        {
          icon: require('../../../../assets/images/small/09.png'),
          name: 'Feeling/Activity'
        },

      ],
      texte: '',
      lien: '',
      image_path: null,
      video_path: null,
      showLinkInput: false,

      message: ''
    }
  },methods: {
    async createPublication() {
  try {
    const token = localStorage.getItem('token');

    if (!this.texte && !this.$refs.image_path.files[0] && !this.$refs.video_path.files[0] && !this.lien) {
      this.message = 'Please enter at least one field (text, photo, video, link)';
      return;
    }

    let formData = new FormData();
    formData.append('texte', this.texte);
    formData.append('image_path', this.$refs.image_path.files[0]);
    formData.append('video_path', this.$refs.video_path.files[0]);
    formData.append('lien', this.lien);
    const response = await axios.post('http://127.0.0.1:8000/api/creerPublication', formData, {
      headers: {
        'Content-Type': 'multipart/form-data',
        Authorization: `Bearer ${token}`,
      }
    });
    window.location.reload();

    this.message = response.data.message;
    this.texte = '';
    this.lien = '';
    this.image_path = null;
    this.video_path = null;
  } catch (error) {
    this.message = 'Error during publication creation';
    console.error(error);
  }

},


handleImageChange(event) {
    this.image_path = event.target.files[0];
  },
  handleVideoChange(event) {
    this.video_path = event.target.files[0];
  }

  }
};
</script>
