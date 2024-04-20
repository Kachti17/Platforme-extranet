<template>
  <modal id="modaltodo" dialogClass="modal-fullscreen-sm-down" tabindex="-1" title="Create Post" aria-labelledby="modalsLabel" aria-hidden="true">
    <form class="">
      <div role="group" class="form-group form-group" >
        <label for="task_tile" class="d-block">Task Title</label>
          <div>
            <input id="task_tile" name="task_title" type="text" placeholder="" class="form-control">
          </div>
      </div>
      <div role="group" class="form-group form-group" >
        <label for="user_id" class="d-block">Assigned By</label>
        <div>
          <div dir="auto" class="v-select vs--single vs--searchable" name="user_id" id="user_id">
            <div id="vs1__combobox" role="combobox" aria-expanded="false" aria-owns="vs1__listbox" aria-label="Search for option" class="vs__dropdown-toggle">
              <div class="vs__selected-options">
                <input aria-autocomplete="list" aria-labelledby="vs1__combobox" aria-controls="vs1__listbox" type="search" autocomplete="off" class="vs__search">
              </div>
              <div class="vs__actions">
                <button type="button" title="Clear Selected" aria-label="Clear Selected" class="vs__clear" style="display: none; user-select: auto;">
                  <svg xmlns="http://www.w3.org/2000/svg" width="10" height="10">
                    <path d="M6.895455 5l2.842897-2.842898c.348864-.348863.348864-.914488 0-1.263636L9.106534.261648c-.348864-.348864-.914489-.348864-1.263636 0L5 3.104545 2.157102.261648c-.348863-.348864-.914488-.348864-1.263636 0L.261648.893466c-.348864.348864-.348864.914489 0 1.263636L3.104545 5 .261648 7.842898c-.348864.348863-.348864.914488 0 1.263636l.631818.631818c.348864.348864.914773.348864 1.263636 0L5 6.895455l2.842898 2.842897c.348863.348864.914772.348864 1.263636 0l.631818-.631818c.348864-.348864.348864-.914489 0-1.263636L6.895455 5z"></path>
                  </svg>
                </button>
                <svg xmlns="http://www.w3.org/2000/svg" width="14" height="10" role="presentation" class="vs__open-indicator">
                  <path d="M9.211364 7.59931l4.48338-4.867229c.407008-.441854.407008-1.158247 0-1.60046l-.73712-.80023c-.407008-.441854-1.066904-.441854-1.474243 0L7 5.198617 2.51662.33139c-.407008-.441853-1.066904-.441853-1.474243 0l-.737121.80023c-.407008.441854-.407008 1.158248 0 1.600461l4.48338 4.867228L7 10l2.211364-2.40069z"></path>
                </svg>
                <div class="vs__spinner" style="display: none; user-select: auto;">Loading...</div>
              </div>
            </div>
            <ul id="vs1__listbox" role="listbox" style="display: none; visibility: hidden; user-select: auto;"></ul>
          </div>
        </div>
      </div>
      <div role="group" class="form-group form-group" >
        <label for="category_id" class="d-block">Category</label>
        <div>
          <div dir="auto" class="v-select vs--single vs--searchable" name="user_id" id="category_id">
            <div id="vs2__combobox" role="combobox" aria-expanded="false" aria-owns="vs2__listbox" aria-label="Search for option" class="vs__dropdown-toggle">
              <div class="vs__selected-options">
                <input aria-autocomplete="list" aria-labelledby="vs2__combobox" aria-controls="vs2__listbox" type="search" autocomplete="off" class="vs__search">
              </div>
              <div class="vs__actions">
                <button type="button" title="Clear Selected" aria-label="Clear Selected" class="vs__clear" style="display: none; user-select: auto;">
                  <svg xmlns="http://www.w3.org/2000/svg" width="10" height="10">
                    <path d="M6.895455 5l2.842897-2.842898c.348864-.348863.348864-.914488 0-1.263636L9.106534.261648c-.348864-.348864-.914489-.348864-1.263636 0L5 3.104545 2.157102.261648c-.348863-.348864-.914488-.348864-1.263636 0L.261648.893466c-.348864.348864-.348864.914489 0 1.263636L3.104545 5 .261648 7.842898c-.348864.348863-.348864.914488 0 1.263636l.631818.631818c.348864.348864.914773.348864 1.263636 0L5 6.895455l2.842898 2.842897c.348863.348864.914772.348864 1.263636 0l.631818-.631818c.348864-.348864.348864-.914489 0-1.263636L6.895455 5z"></path>
                  </svg>
                </button>
                <svg xmlns="http://www.w3.org/2000/svg" width="14" height="10" role="presentation" class="vs__open-indicator">
                  <path d="M9.211364 7.59931l4.48338-4.867229c.407008-.441854.407008-1.158247 0-1.60046l-.73712-.80023c-.407008-.441854-1.066904-.441854-1.474243 0L7 5.198617 2.51662.33139c-.407008-.441853-1.066904-.441853-1.474243 0l-.737121.80023c-.407008.441854-.407008 1.158248 0 1.600461l4.48338 4.867228L7 10l2.211364-2.40069z"></path>
                </svg>
                <div class="vs__spinner" style="display: none; user-select: auto;">Loading...</div>
              </div>
            </div>
            <ul id="vs2__listbox" role="listbox" style="display: none; visibility: hidden;"></ul>
          </div>
        </div>
      </div>
      <div role="group" class="form-group form-group" >
        <label for="priority" class="d-block">Priority</label>
        <div>
          <div class="custom-control custom-control-inline custom-radio">
            <input type="radio" name="priority" class="custom-control-input" value="Expiring" >
            <label class="custom-control-label" for="__BVID__288">Expiring</label>
          </div>
          <div class="custom-control custom-control-inline custom-radio">
            <input type="radio" name="priority" class="custom-control-input" value="Ending" >
            <label class="custom-control-label" for="__BVID__289">Ending</label>
          </div>
          <div class="custom-control custom-control-inline custom-radio">
            <input type="radio" name="priority" class="custom-control-input" value="Urgent" >
            <label class="custom-control-label" for="__BVID__290">Urgent</label>
          </div>
        </div>
      </div>
    </form>
    <model-footer>
      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
      <button type="button" class="btn btn-primary">Save</button>
    </model-footer>
  </modal>
</template>
<script>
import { Users } from '../../../FackApi/api/chat'
export default {
  name: 'TaskForm',
  props: ['newId', 'category'],
  data () {
    return {
      userList: [],
      categoryList: [],
      status: ['Expiring', 'Ending', 'Urgent'],
      task: this.default()
    }
  },
  mounted () {
    Users.map(item => {
      this.userList.push({
        label: item.name,
        code: item.id
      })
    })
    this.category.map(item => {
      if (!item.isHidden) {
        this.categoryList.push({
          label: item.name,
          code: item.id
        })
      }
    })
  },
  computed: {
  },
  methods: {
    default () {
      return {
        id: this.newId,
        task_title: '',
        project_id: 1,
        category_id: 0,
        user_id: 0,
        status: 'Urgent',
        task_status: false
      }
    },
    saveTask (item) {
      item.id = this.$store.getters['Todo/selectedProjectState'].id
      item.project_id = this.$store.getters['Todo/selectedProjectState'].id
      item.category_id = item.category_id.code
      item.user_id = item.user_id.code
      this.$store.dispatch('Todo/addTaskAction', item)
      this.$bvModal.hide('add_task')
      this.task = this.default()
    }
  }
}
</script>
