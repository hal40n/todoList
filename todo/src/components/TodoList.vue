<template>
    <div>
        <input v-model="newTodo" @keyup.enter="addTodo" placeholder="Add a new Todo" />
        <ul>
            <TodoItem v-for="todo in todos" :key="todo.id" :todo="todo" @delete="deleteTodo" @update="updateTodo" />
        </ul>
    </div>
</template>

<script lang="ts">
import { defineComponent, ref } from 'vue';
import TodoItem from './TodoItem.vue';

export default defineComponent({
    components: {
        TodoItem
    },
    setup() {
        const newTodo = ref('');
        const todos = ref([
            { id: 1, text: 'Learn Vue 3' },
            { id: 2, text: 'Learn TypeScript' },
            { id: 3, text: 'Build a Todo App' }
        ]);

        const addTodo = () => {
            if (newTodo.value.trim()) {
                todos.value.push({
                    id: todos.value.length + 1,
                    text: newTodo.value
                });
                newTodo.value = '';
            }
        }

        const deleteTodo = (id: number) => {
            todos.value = todos.value.filter(todo => todo.id !== id);
        }

        const updateTodo = (updatedTodo: { id: number; text: string }) => {
            const index = todos.value.findIndex(todo => todo.id === updatedTodo.id);
            if (index !== -1) {
                todos.value[index] = updatedTodo;
            }
        }

        return { newTodo, todos, addTodo, deleteTodo, updateTodo };
    }
});
</script>