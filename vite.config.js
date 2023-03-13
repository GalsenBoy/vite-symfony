import { defineConfig } from 'vite'
import vue from '@vitejs/plugin-vue'

// https://vitejs.dev/config/
export default defineConfig({
  root:'./assets',
  cors:true,
  plugins: [vue()],
})
