<template>
  <form @submit.prevent="createTodo">
    <div class="input-group mb-3">
      <input type="text" v-model="title" class="form-control" placeholder="What to do?" aria-label="What to do?"
        aria-describedby="btn-submit">
      <button class="btn btn-success" type="submit" id="btn-submit">Add To Do</button>
    </div>
  </form>
</template>

<script>
export default {
  name: "TodoForm",
  data() {
    return {
      title: ''
    }
  },
  methods: {
    createTodo() {
      if (this.title.trim()) {
        this.$emit('create', this.title);
        this.title = '';
      }
    }
  }
}
</script>