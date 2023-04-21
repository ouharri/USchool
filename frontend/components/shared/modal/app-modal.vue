<template>
  <Transition>
    <div v-if="isOpenAppModal"
         class="fixed top-0 left-0 right-0 w-full p-4 z-50 overflow-x-hidden flex justify-center transition duration-700 ease-in-out items-center bg-black bg-opacity-50 md:inset-0 h-screen">
      <div class="relative max-h-full z-50 w-full" :class="`max-w-${size}`">
        <!-- Modal content -->
        <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
          <!-- Modal header -->
          <div class="flex items-start justify-between p-4 border-b rounded-t dark:border-gray-600">
            <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
              <slot name="header"></slot>
            </h3>
            <button type="button" @click="closeAppModal"
                    class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white">
              <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd"
                      d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                      clip-rule="evenodd"></path>
              </svg>
            </button>
          </div>
          <!-- Modal body -->
          <div class="p-6 overflow w-full max-h-[60vh]">
            <slot name="body"></slot>
          </div>
          <!-- Modal footer -->
          <div class="space-y-2 p-6 border-t border-gray-200 rounded-b dark:border-gray-600">
            <div class="text-red-500 flex items-center justify-center text-sm mx-auto">
              <svg v-if="$slots.footer" aria-hidden="true" class="w-5 h-5 mr-2" fill="none" stroke="currentColor"
                   viewBox="0 0 24 24"
                   xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                      d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
              </svg>
              <slot name="footer"></slot>
            </div>
            <div
              class="flex items-center justify-end space-x-2">
              <button @click="closeAppModal" type="button"
                      class="text-gray-500 bg-white hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-blue-300 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-600">
                Cancel
              </button>
              <button @click="IsAccepted" type="button" :class="modalColor"
                      class="text-white bg-blue-700 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                Save
              </button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </Transition>
</template>

<script setup>

const emit = defineEmits(['update:isAccepted', 'update:isOpenAppModal']);

defineProps({
  'size': {
    type: String,
    default: '2xl w-full',
  },
  'isOpenAppModal': {
    type: Boolean,
    default: false,
  },
  'modalColor': {
    type: String,
    default: 'bg-blue-700 hover:bg-blue-800',
  },
})

function closeAppModal() {
  emit('update:isOpenAppModal', false);
}

function IsAccepted() {
  emit('update:isAccepted');
}

</script>

<style scoped>
.max-w-2xl {
  max-width: 42rem;
}

.max-w-4xl {
  max-width: 56rem;
}

.max-w-7xl {
  max-width: 80rem;
}
</style>
