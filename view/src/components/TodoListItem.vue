<template>
  <li class="list-group-item list-group-item-action d-flex justify-content-between align-items-center">
    <div>
      <input type="checkbox" v-bind:checked="todo.is_completed" @change="$emit('update', todo.id)">
      <span class="mx-1" v-bind:class="{ done: todo.is_completed }">{{ todo.title }}</span>
    </div>
    <MDBBtn color="primary" floating>
      <i class="fab fa-linkedin"> </i>
    </MDBBtn>
    <!--button type="button" @click="$emit('delete', todo.id)" class="btn btn-sm btn-outline-danger">
      <MDBIcon solid icon="skating" fw style="background: DodgerBlue" />
    </button-->
  </li>
</template>

<script>
import { MDBBtn, MDBIcon } from "mdb-vue-ui-kit";

export default {
  name: "TodoListItem",
  props: {
    todo: {
      type: Object,
      required: true
    }
  },
  components: {
    MDBBtn,
    MDBIcon
  }
}
</script>

<style scoped>
.done {
  text-decoration: line-through;
  color: #aaa;
}
</style>