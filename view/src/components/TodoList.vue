<template>
  <ul class="list-group mb-3">
    <TodoListItem v-for="todo in todos" :key="todo.id" v-bind:todo="todo" @delete="deleteTodo" @update="updateTodo"  />
  </ul>
</template>

<script>
import TodoListItem from './TodoListItem.vue';

export default {
    App: "TodoList",
    props: {
      todos: {
        type: Array,
        required: true
      }
    },
    components: { TodoListItem },
    methods: {
      deleteTodo(id) {
        this.$emit('delete', id);
      },
      updateTodo(id) {
        this.$emit('update', id);
      }
    },
}

</script>