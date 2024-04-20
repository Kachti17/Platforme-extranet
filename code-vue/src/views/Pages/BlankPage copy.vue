<template>

  <div class="col-sm-12">
     <div class="card card-block card-stretch card-height">
        <div class="card-body">
           <div class="user-post-data">
              <div class="d-flex justify-content-between">
                 <div class="me-3">
                    <img class="rounded-circle img-fluid" src="@/assets/images/user/03.jpg" alt="">
                 </div>
                 <div class="w-100">
                    <div class="d-flex  justify-content-between">
                       <div class="">
                          <h5 class="mb-0 d-inline-block">Barb Ackue</h5>
                          <p class="mb-0 text-primary">1 hour ago</p>
                       </div>
                       <div class="card-post-toolbar">
                           <div class="dropdown">
                             <span class="dropdown-toggle material-symbols-outlined" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" role="button">
                             more_horiz
                             </span>
                             <div class="dropdown-menu m-0 p-0">

                                <a class="dropdown-item p-3" href="#">
                                   <div class="d-flex align-items-top">
                                      <span class="material-symbols-outlined">
                                                           edit
                                                           </span>
                                      <div class="data ms-2">
                                         <h6>Edit Post</h6>
                                         <p class="mb-0">Update your post and saved items</p>
                                      </div>
                                   </div>
                                </a>

                                <a class="dropdown-item p-3" href="#">
                                   <div class="d-flex align-items-top">
                                     <span class="material-symbols-outlined">
                                                           delete
                                                           </span>
                                      <div class="data ms-2">
                                         <h6>Delete</h6>
                                         <p class="mb-0">Remove thids Post on Timeline</p>
                                      </div>
                                   </div>
                                </a>

                             </div>
                          </div>
                       </div>
                    </div>
                 </div>
              </div>
           </div>
           <div class="mt-3">
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi nulla dolor, ornare at commodo non, feugiat non nisi. Phasellus faucibus mollis pharetra. Proin blandit ac massa sed rhoncus</p>
           </div>
           <div class="user-post">
              <a href="javascript:void();"><img src="@/assets/images/page-img/p4.jpg" alt="post-image" class="img-fluid rounded w-100"></a>
           </div>
           <div class="comment-area mt-3">
              <div class="d-flex justify-content-between align-items-center flex-wrap">
                 <div class="like-block position-relative d-flex align-items-center">
                    <div class="d-flex align-items-center">
                       <div class="like-data">
                          <div class="dropdown">
                             <span class="dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" role="button">
                             <img src="@/assets/images/icon/01.png" class="img-fluid" alt="">
                             </span>

                          </div>
                       </div>
                       <div class="total-like-block ms-2 me-3">
                          <div class="dropdown">
                             <span class="dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" role="button">
                             140 Likes
                             </span>

                          </div>
                       </div>
                    </div>
                    <div class="total-comment-block">
                       <div class="dropdown">
                          <span class="dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" role="button">
                          20 Comment
                          </span>

                       </div>
                    </div>
                 </div>
              </div>
              <hr>
              <ul class="post-comments list-inline p-0 m-0">
                 <li>
                    <div class="d-flex ">
                       <div class="user-img">
                          <img src="@/assets/images/user/03.jpg" alt="userimg" class="avatar-35 rounded-circle img-fluid">
                       </div>
                       <div class="comment-data-block ms-3">
                          <h6>Paul Molive</h6>
                          <p class="mb-0">Lorem ipsum dolor sit amet</p>
                          <div class="d-flex flex-wrap align-items-center comment-activity">
                             <a href="javascript:void();">like</a>
                             <a href="javascript:void();">reply</a>
                             <a href="javascript:void();">translate</a>
                             <span> 5 min </span>
                          </div>
                       </div>
                    </div>
                 </li>
              </ul>
              <form class="comment-text d-flex align-items-center mt-3" action="javascript:void(0);">
                 <input type="text" class="form-control rounded" placeholder="Enter Your Comment">
                <div class="comment-attagement d-flex align-items-center">
                          <a href="javascript:void(0);" class="material-symbols-outlined me-3 link">
                          insert_link
                          </a>
                          <a href="javascript:void(0);" class="material-symbols-outlined  me-3">
                          sentiment_satisfied
                          </a>
                          <a href="javascript:void(0);" class="material-symbols-outlined  me-3">
                          photo_camera
                          </a>
                       </div>
              </form>
           </div>
        </div>
     </div>
  </div>

  <div class="col-sm-12">
     <div class="card card-block card-stretch card-height">
        <div class="card-body">
           <div class="user-post-data">
              <div class="d-flex justify-content-between">
                 <div class="me-3">
                    <img class="rounded-circle img-fluid" src="@/assets/images/user/02.jpg" alt="">
                 </div>
                 <div class="w-100">
                    <div class="d-flex justify-content-between">
                       <div class="">
                          <h5 class="mb-0 d-inline-block">Paige Turner</h5>
                          <p class="mb-0 text-primary">1 day ago</p>
                       </div>
                       <div class="card-post-toolbar">
                           <div class="dropdown">
                             <span class="dropdown-toggle material-symbols-outlined" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" role="button">
                             more_horiz
                             </span>
                             <div class="dropdown-menu m-0 p-0">

                                <a class="dropdown-item p-3" href="#">
                                   <div class="d-flex align-items-top">
                                      <span class="material-symbols-outlined">
                                                           edit
                                                           </span>
                                      <div class="data ms-2">
                                         <h6>Edit Post</h6>
                                         <p class="mb-0">Update your post and saved items</p>
                                      </div>
                                   </div>
                                </a>

                                <a class="dropdown-item p-3" href="#">
                                   <div class="d-flex align-items-top">
                                     <span class="material-symbols-outlined">
                                                           delete
                                                           </span>
                                      <div class="data ms-2">
                                         <h6>Delete</h6>
                                         <p class="mb-0">Remove thids Post on Timeline</p>
                                      </div>
                                   </div>
                                </a>

                             </div>
                          </div>
                       </div>
                    </div>
                 </div>
              </div>
           </div>
           <div class="mt-3">
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi nulla dolor, ornare at commodo non, feugiat non nisi. Phasellus faucibus mollis pharetra. Proin blandit ac massa sed rhoncus</p>
           </div>
           <div class="user-post">
              <div class="ratio ratio-16x9">
                 <iframe  src="https://www.youtube.com/embed/j_GsIanLxZk?rel=0" allowfullscreen></iframe>
              </div>
           </div>
           <div class="comment-area mt-3">
              <div class="d-flex justify-content-between align-items-center flex-wrap">
                 <div class="like-block position-relative d-flex align-items-center">
                    <div class="d-flex align-items-center">
                          <div class="like-data">
                          <div class="dropdown">
                             <span class="dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" role="button">
                             <img src="@/assets/images/icon/01.png" class="img-fluid" alt="">
                             </span>

                          </div>
                          </div>
                          <div class="total-like-block ms-2 me-3">
                          <div class="dropdown">
                             <span class="dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" role="button">
                             140 Likes
                             </span>
                          </div>
                          </div>
                    </div>
                    <div class="total-comment-block">
                          <div class="dropdown">
                          <span class="dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" role="button">
                          20 Comment
                          </span>
                          </div>
                    </div>
                 </div>
              </div>
        </div>



        </div>
     </div>
  </div>
</template>
<script>
export default {
 name: 'SocialPost',
 props: [
   'post'
 ],
 data () {
   return {
     commentMessage: ''
   }
 }
}
</script>

<style>
 /* .dropdown-item{
   color: #212529 !important;
 } */
 /* .dropdown-menu .dropdown-item:focus, .dropdown-menu .dropdown-item:hover{
   background: transparent;
   color: var(--iq-primary) !important;
 } */
</style>
