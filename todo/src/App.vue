<template>
  <div id="app">
    <h1>Todo List</h1>
    <TodoList />
  </div>
</template>

<script lang="ts">
import { defineComponent } from 'vue';
import TodoList from './components/TodoList.vue';

export default defineComponent({
  components: {
    TodoList
  }
});
</script>

<style>
#app {
  font-family: Avenir, Helvetica, Arial, sans-serif;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  text-align: center;
  color: #2c3e50;
  margin-top: 60px;
}

input {
  padding: 10px;
  margin: 10px 0;
  width: calc(100% - 20px);
  box-sizing: border-box;
}

button {
  margin-left: 10px;
  padding: 5px 10px;
}
</style>
