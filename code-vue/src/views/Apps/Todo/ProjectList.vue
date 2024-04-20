<template>
  <iq-card>
    <template v-slot:body>
      <div class="iq-todo-page">
        <form class="position-relative">
          <div class="form-group mb-0">
          <input type="text" class="form-control todo-search" id="exampleInputEmail002"  placeholder="Search">
          <a class="search-link" href="#"><span class="material-symbols-outlined lh-1">
                        search
                        </span></a>
          </div>
        </form>
        <div class="add-new-project mt-3 mb-3"><a href="#" class="d-flex align-items-center nrw-project"><i class="material-symbols-outlined me-2">
                     add
                     </i>add Project</a></div>
        <ul class="todo-task-list p-0 m-0">
          <li v-for="(item,index) in filteredList" :key="index" @click="selectProject(item)" :class="`${item.id === selectedProject ? 'active' : ''}`">
            <a href="#" class="d-flex align-items-center"><i class="material-symbols-outlined md-18 me-1">
                        filter_none
                        </i>{{ item.project_name }}</a>
            <ul :id="'todo-task'+index" class="sub-task mt-2 p-0" :class="`${item.id === selectedProject.id ? 'show' : ''}`">
              <li v-for="(category, index1) in categoryList" :key="index1" @click="selectCategory(category)" :class="`${category.id === selectedCategory.id ? 'active' : ''}`">
                <a class="d-flex align-items-center justify-content-between" :href="category.href"><div class="d-flex align-items-center"><i :class="`material-symbols-outlined md-18 me-1 filled text-${category.color}`"> fiber_manual_record</i>{{ category.name }}</div><span v-if="index1==2" class="badge bg-danger float-end">44</span> </a>
              </li>
            </ul>
          </li>
        </ul>
      </div>
    </template>
  </iq-card>
</template>
<script>
export default {
  name: 'ProjectList',
  props: [
    'selectedProject',
    'selectedCategory',
    'projectList',
    'categoryList'
  ],
  data () {
    return {
      search: '',
      project: {
        id: 0,
        project_name: ''
      }
    }
  },
  methods: {
    saveProject () {
      this.$store.dispatch('Todo/addProjectAction', this.project)
      this.$bvModal.hide('add_project')
    },
    selectProject (project) {
      this.$store.dispatch('Todo/selectedAction', { data: project, type: 'project' })
      this.search = ''
    },
    selectCategory (category) {
      this.$store.dispatch('Todo/selectedAction', { data: category, type: 'category' })
      this.search = ''
    }
  },
  computed: {
    filteredList () {
      return this.projectList.filter(item => {
        return item.project_name.toLowerCase().includes(this.search.toLowerCase())
      })
    }
  },
  mounted () {
  }
}
</script>
