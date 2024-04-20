<template>
<div class="row">
  <div class="col-sm-12">
    <iq-card>
      <template v-slot:headerTitle>
        <h4 class="card-title">Files</h4>
      </template>
      <template v-slot:headerAction>
       <div class="dropdown">
                  <span class="dropdown-btoggle material-symbols-outlined" id="dropdownMenuButton5" data-bs-toggle="dropdown" aria-expanded="false">
                  more_horiz
                  </span>
                  <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton5" style="">
                    <a class="dropdown-item d-flex align-items-center" href="#"><span class="material-symbols-outlined me-2 md-18">
                    visibility
                    </span>View</a>
                    <a class="dropdown-item d-flex align-items-center" href="#"><span class="material-symbols-outlined me-2 md-18">
                    delete
                    </span>Delete</a>
                    <a class="dropdown-item d-flex align-items-center" href="#"><span class="material-symbols-outlined me-2 md-18">
                    edit
                    </span>Edit</a>
                    <a class="dropdown-item d-flex align-items-center" href="#"><span class="material-symbols-outlined me-2 md-18">
                    print
                    </span>Print</a>
                    <a class="dropdown-item d-flex align-items-center" href="#"><span class="material-symbols-outlined me-2 md-18">
                    file_download
                    </span>Download</a>
                  </div>
        </div>
      </template>
      <template v-slot:body>
        <div class="table-responsive">
          <div class="row justify-content-between d-flex">
            <div class="col-sm-12 col-md-6">
              <div id="user_list_datatable_info" class="dataTables_filter">
                  <form class="me-3 position-relative">
                      <div class="form-group mb-0">
                          <input type="search" class="form-control" id="exampleInputSearch" placeholder="Search">
                      </div>
                  </form>
              </div>
            </div>
            <div class="col-sm-12 col-md-6">
              <div class="user-list-files d-flex justify-content-end">
                <a href="#" class="chat-icon-phone btn bg-soft-primary">
                Print
                </a>
                <a href="#" class="chat-icon-video btn bg-soft-primary">
                Excel
                </a>
                <a href="#" class="chat-icon-delete btn bg-soft-primary">
                Pdf
                </a>
              </div>
            </div>
          </div>
          <table class="files-lists table table-striped mt-4">
            <thead>
              <tr>
                <th scope="col">
                    <div class=" text-center">
                        <input type="checkbox" class="form-check-input">
                    </div>
                </th>
                <th scope="col">File Name</th>
                <th scope="col">File Type</th>
                <th scope="col">Date</th>
                <th scope="col">Size</th>
                <th scope="col">Author</th>
                <th scope="col">Action</th>
              </tr>
            </thead>
            <tbody>
              <tr v-for="(item,index) in fileData" :key="index">
                <td>
                  <div class=" text-center">
                      <input type="checkbox" class="form-check-input">
                  </div>
                </td>
                <td>
                    <img class="rounded-circle img-fluid avatar-40 me-2" :src="item.img" alt="profile">{{item.imgTitle}}
                </td>
                <td>{{item.heading}}</td>
                <td>
                    {{item.date}}
                </td>
                <td>{{item.size}}</td>
                <td>
                    {{item.user}}
                </td>
                <td>
                  <div class="flex align-items-center list-user-action lh-1">
                                 <a data-bs-toggle="tooltip" data-bs-placement="top" title="Download"  href="#"><i class="material-symbols-outlined">
                                 file_download
                                 </i></a>
                                 <a data-bs-toggle="tooltip" data-bs-placement="top" title="Delete"  href="#"><i class="material-symbols-outlined">
                                 delete
                                 </i></a>
                              </div>
                </td>
              </tr>
            </tbody>
          </table>
        </div>
      </template>
    </iq-card>
  </div>
</div>
</template>
<script>
// import { socialvue } from '../../../config/pluginInit'
export default {
  name: 'File',
  mounted () {
    // socialvue.index()
  },
  data () {
    return {
      fileData: [
        {
          img: require('../../../assets/images/page-img/43.png'),
          imgTitle: 'post report',
          heading: 'Document',
          date: 'Mar 12, 2020',
          size: '390 kb',
          user: 'Anna Sthesia'
        },
        {
          img: require('../../../assets/images/page-img/44.png'),
          imgTitle: 'usages',
          heading: 'Document',
          date: ' Mar 18, 2020 ',
          size: '390 kb',
          user: ' Paul Molive '
        },
        {
          img: require('../../../assets/images/page-img/45.png'),
          imgTitle: 'Images file',
          heading: 'Document',
          date: 'Mar 19, 2020',
          size: '600 kb',
          user: ' Bob Frapples '
        },
        {
          img: require('../../../assets/images/page-img/46.png'),
          imgTitle: 'total comments ',
          heading: 'Slide',
          date: 'Mar 21, 2020',
          size: '800 kb',
          user: ' Barb Ackue '
        },
        {
          img: require('../../../assets/images/page-img/47.png'),
          imgTitle: 'popular events',
          heading: 'excel',
          date: 'Mar 24, 2020',
          size: '500 kb',
          user: 'Anna Sthesia'
        },
        {
          img: require('../../../assets/images/page-img/43.png'),
          imgTitle: 'todo list',
          heading: 'Pdf',
          date: 'Mar 28, 2020',
          size: '320 kb',
          user: ' Ira Membrit '
        },
        {
          img: require('../../../assets/images/page-img/44.png'),
          imgTitle: 'music list',
          heading: 'Pdf',
          date: 'Mar 30, 2020',
          size: '600 kb',
          user: 'Anna Sthesia'
        }
      ],
      action: [
        {
          icon: 'ri-eye-fill mr-2',
          title: 'View'
        },
        {
          icon: 'ri-delete-bin-6-fill mr-2',
          title: 'Delete'
        },
        {
          icon: 'ri-pencil-fill mr-2',
          title: 'Edit'
        },
        {
          icon: 'ri-printer-fill mr-2',
          title: 'Print'
        },
        {
          icon: 'ri-file-download-fill mr-2',
          title: 'Download'
        }
      ]
    }
  }
}
</script>
