<template>
  <div class="container">
    <div class="row justify-content-center mt-3">
      <div class="col-md-8">
        <TodoForm @create="createTodo" />
      </div>
    </div>
    <div class="row justify-content-center">
      <div class="col-md-8">
        <TodoList :todos="todos" @delete="deleteTodo" @update="updateTodo" />
      </div>
    </div>
  </div>

</template>

<script>
import TodoList from './components/TodoList.vue'
import TodoForm from './components/TodoForm.vue'

export default {
  name: 'App',
  data() {
    return {
      todos: []
    }
  },
  mounted() {
    this.getList();
  },
  methods: {
    createTodo(title) {
      fetch(process.env.VUE_APP_API_URL + '/create', {
        method: 'POST',
        headers: { "Content-Type": "application/json" },
        body: JSON.stringify({
          title: title
        })
      })
      .then( () => {
        this.getList();
      })
      .catch(error => console.log(error));
    },
    updateTodo(id) {
      const index = this.todos.findIndex(todo => todo.id === id);
      
      fetch(process.env.VUE_APP_API_URL + `/${id}`, {
        method: 'PUT',
        headers: { "Content-Type": "application/json" },
        body: JSON.stringify({
          is_completed: !this.todos[index].is_completed
        })
      })
      .then( () => {
        this.getList();
      })
      .catch(error => console.log(error));
    },
    deleteTodo(id) {
      // this.todos = this.todos.filter(todo => todo.id !== id);
      
      fetch(process.env.VUE_APP_API_URL + `/${id}`, {
        method: 'DELETE',
        headers: { "Content-Type": "application/json" }
      })
      .then( () => {
        this.getList();
      })
      .catch(error => console.log(error));
    },
    getList() {
      fetch(process.env.VUE_APP_API_URL)
      .then(res => res.json()).then((response) => {
        this.todos = response;
      }).catch((error) => {
        console.log(error);
      });
    }
  },
  components: {
    TodoList,
    TodoForm
  }
}
</script>

<style>
body {
  background-color: #efefef;
  font-family: system-ui;
  font-size: 1rem;
}
</style>