<template>
    <div class="row">
      <div class="col-lg-3">
        <ProjectList
          :project-list="projectList"
          :category-list="categoryList"
          :selected-category="selectedCategory"
          :selected-project="selectedProject"/>
      </div>
      <div class="col-lg-9">
        <TaskList :task-list="taskList" :project="selectedProject" :category="selectedCategory"/>
      </div>
    </div>
</template>
<script>
// import { socialvue } from '../../../config/pluginInit'
import ProjectList from '../Todo/ProjectList'
import TaskList from '../Todo/TaskList'
import { mapGetters } from 'vuex'
import Todo from '../../../store/Todo/'
export default {
  name: 'TodoListing',
  components: { ProjectList, TaskList },
  mounted () {
    // socialvue.index()
  },
  beforeMount () {
    this.$store.registerModule('Todo', Todo)
  },
  beforeUnmount () {
    this.$store.unregisterModule('Todo')
  },
  computed: {
    ...mapGetters({
      taskList: 'Todo/taskState',
      projectList: 'Todo/projectState',
      categoryList: 'Todo/categoryState',
      selectedCategory: 'Todo/selectedCategoryState',
      selectedProject: 'Todo/selectedProjectState'
    })
  }
}
</script>
<style>
</style>
