<template>
  <div class="row">
    <div class="col-sm-12">
      <div class="card position-relative inner-page-bg bg-primary" style="height: 150px;">
        <div class="inner-page-title">
          <h3 class="text-white">Editable Table Page</h3>
          <p class="text-white">lorem ipsum</p>
        </div>
      </div>
    </div>
    <div class="col-sm-12">
      <iq-card>
        <template v-slot:headerTitle>
          <h4 class="card-title">Editable Table</h4>
        </template>
        <template v-slot:body>
            <div id="table" class="table-editable">
                <span class="table-add float-end mb-3 mr-2">
                <button class="btn btn-sm btn-success d-flex align-items-center">
                    <i class="material-symbols-outlined me-1 md-18">
                      add
                    </i>Add New
                  </button>
                </span>
                <table class="table table-bordered table-responsive-md table-striped text-center">
                    <thead>
                    <tr>
                        <th>Name</th>
                        <th>Age</th>
                        <th>Company Name</th>
                        <th>Country</th>
                        <th>City</th>
                        <th>Sort</th>
                        <th>Remove</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td contenteditable="true">Gio Metric</td>
                        <td contenteditable="true">25</td>
                        <td contenteditable="true">Deepends</td>
                        <td contenteditable="true">Spain</td>
                        <td contenteditable="true">Madrid</td>
                        <td>
                          <span class="table-up">
                            <a href="#!" class="indigo-text">
                              <i class="material-symbols-outlined md-16">
                                north
                              </i>
                            </a>
                          </span>
                          <span class="table-down">
                             <a href="#!" class="indigo-text">
                              <i class="material-symbols-outlined md-16">
                                south
                              </i>
                            </a>
                          </span>
                        </td>
                        <td>
                          <span class="table-remove"><button type="button" class="btn btn-danger btn-rounded btn-sm my-0">Remove</button></span>
                        </td>
                    </tr>
                    <tr>
                        <td contenteditable="true">Manny Petty</td>
                        <td contenteditable="true">45</td>
                        <td contenteditable="true">Insectus</td>
                        <td contenteditable="true">France</td>
                        <td contenteditable="true">San Francisco</td>
                        <td>
                          <span class="table-up">
                            <a href="#!" class="indigo-text">
                              <i class="material-symbols-outlined md-16">
                                north
                              </i>
                            </a>
                          </span>
                          <span class="table-down">
                            <a href="#!" class="indigo-text">
                              <i class="material-symbols-outlined md-16">
                                south
                              </i>
                            </a>
                          </span>
                        </td>
                       <td>
                          <span class="table-remove"><button type="button" class="btn btn-danger btn-rounded btn-sm my-0">Remove</button></span>
                        </td>
                    </tr>
                    <tr>
                        <td contenteditable="true">Lucy Tania</td>
                        <td contenteditable="true">26</td>
                        <td contenteditable="true">Isotronic</td>
                        <td contenteditable="true">Germany</td>
                        <td contenteditable="true">Frankfurt am Main</td>
                        <td>
                          <span class="table-up">
                            <a href="#!" class="indigo-text">
                              <i class="material-symbols-outlined md-16">
                                north
                              </i>
                            </a>
                          </span>
                          <span class="table-down">
                            <a href="#!" class="indigo-text">
                              <i class="material-symbols-outlined md-16">
                                south
                              </i>
                            </a>
                          </span>
                        </td>
                        <td>
                          <span class="table-remove"><button type="button" class="btn btn-danger btn-rounded btn-sm my-0">Remove</button></span>
                        </td>
                    </tr>
                    <tr class="hide">
                        <td contenteditable="true">Anna Mull</td>
                        <td contenteditable="true">35</td>
                        <td contenteditable="true">Portica</td>
                        <td contenteditable="true">USA</td>
                        <td contenteditable="true">Oregon</td>
                      <td>
                        <span class="table-up">
                          <a href="#!" class="indigo-text">
                            <i class="material-symbols-outlined md-16">
                              north
                            </i>
                          </a>
                        </span>
                        <span class="table-down">
                          <a href="#!" class="indigo-text">
                            <i class="material-symbols-outlined md-16">
                              south
                            </i>
                          </a>
                        </span>
                      </td>
                        <td>
                          <span class="table-remove"><button type="button" class="btn btn-danger btn-rounded btn-sm my-0">Remove</button></span>
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
// import { socialvue } from '../../config/pluginInit'

export default {
  name: 'EditableTable',
  mounted () {
    // socialvue.index()
  },
  methods: {
    add () {
      this.rows.push(this.default())
    },
    default () {
      return {
        id: this.rows.length,
        name: '',
        position: '',
        office: '',
        age: '',
        start_date: '2011/04/25',
        salary: '$0',
        editable: false
      }
    },
    edit (item) {
      item.editable = true
    },
    submit (item) {
      item.editable = false
    },
    remove (item) {
      this.rows.splice(this.rows.indexOf(item), 1)
    }
  },
  data () {
    return {
      columns: [
        { label: 'Name', key: 'name', class: 'text-left' },
        { label: 'Position', key: 'position', class: 'text-left' },
        { label: 'Office', key: 'office', class: 'text-left' },
        { label: 'Age', key: 'age', class: 'text-left' },
        { label: 'Start date', key: 'start_date', class: 'text-left' },
        { label: 'Salary', key: 'salary', class: 'text-left' },
        { label: 'Action', key: 'action', class: 'text-center' }
      ],
      rows: [
        {
          id: 1,
          name: 'Tiger Nixon',
          position: 'System Architect',
          office: 'Edinburgh',
          age: '61',
          start_date: '2011/04/25',
          salary: '$320,800',
          editable: false
        },
        {
          id: 2,
          name: 'Garrett Winters',
          position: 'Accountant',
          office: 'Tokyo',
          age: '63',
          start_date: '2011/06/19',
          salary: '$200,600',
          editable: false
        },
        {
          id: 3,
          name: 'Ashton Cox',
          position: 'Junior Technical Author',
          office: 'San Francisco',
          age: '69',
          start_date: '2011/01/20',
          salary: '$140,500',
          editable: false
        },
        {
          id: 4,
          name: 'Cedric Kelly',
          position: 'Senior Javascript Developer',
          office: 'Edinburgh',
          age: '42',
          start_date: '2011/02/02',
          salary: '$360,500',
          editable: false
        },
        {
          id: 5,
          name: 'Airi Satou',
          position: 'Accountant',
          office: 'Tokyo',
          age: '39',
          start_date: '2011/08/11',
          salary: '$170,800',
          editable: false
        },
        {
          id: 1,
          name: 'Tiger Nixon',
          position: 'System Architect',
          office: 'Edinburgh',
          age: '61',
          start_date: '2011/04/25',
          salary: '$320,800',
          editable: false
        },

        {
          id: 5,
          name: 'Airi Satou',
          position: 'Accountant',
          office: 'Tokyo',
          age: '39',
          start_date: '2011/08/11',
          salary: '$170,800',
          editable: false
        },
        {
          id: 1,
          name: 'Tiger Nixon',
          position: 'System Architect',
          office: 'Edinburgh',
          age: '61',
          start_date: '2011/04/25',
          salary: '$320,800',
          editable: false
        }
      ]
    }
  }
}
</script>
