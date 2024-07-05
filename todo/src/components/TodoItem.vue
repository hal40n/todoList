<template>
    <li>
        <div v-if="isEditing">
            <input v-model="editableText" @keyup.enter="saveEdit" @blur="cancelEdit" />
            <button @click="saveEdit">Save</button>
            <button @click="cancelEdit">Cancel</button>
        </div>
        <div v-else>
            {{ todo.text }}
            <button @click="startEdit">Edit</button>
            <button @click="$emit('delete', todo.id)">Delete</button>
        </div>
    </li>
</template>

<script lang="ts">
import { defineComponent, PropType, ref } from 'vue';

export default defineComponent({
    props: {
        todo: {
            type: Object as PropType<{ id: number; text: string }>,
            required: true
        }
    },
    emits: ['delete', 'update'],
    setup(props, { emit }) {
        const isEditing = ref(false);
        const editableText = ref(props.todo.text);

        const startEdit = () => {
            isEditing.value = true;
            editableText.value = props.todo.text;
        }

        const saveEdit = () => {
            if (editableText.value.trim()) {
                emit('update', { ...props.todo, text: editableText.value });
                isEditing.value = false;
            }
        }

        const cancelEdit = () => {
            isEditing.value = false;
            editableText.value = props.todo.text;
        }

        return { isEditing, editableText, startEdit, saveEdit, cancelEdit };
    }
})
</script>