<template>
  <li class="list-group-item list-group-item-action d-flex justify-content-between align-items-center">
    <div>
      <input type="checkbox" v-bind:checked="todo.is_completed" @change="$emit('update', todo.id)">
      <span class="mx-1" v-bind:class="{ done: todo.is_completed }">{{ todo.title }}</span>
    </div>
    <button type="button" @click="$emit('delete', todo.id)" class="btn btn-sm btn-outline-danger">
      <span class="icon icon-times"></span>
    </button>
  </li>
</template>

<script>
export default {
  name: "TodoListItem",
  props: {
    todo: {
      type: Object,
      required: true
    }
  }
}
</script>

<style scoped>
.done {
  text-decoration: line-through;
  color: #aaa;
}
</style>