<template>
  <div class="min-h-full flex w-full">
    <div
      class="flex-1 flex flex-col justify-center py-12 px-4 sm:px-6 lg:flex-none lg:px-20 xl:px-24 w-[50%]"
    >
      <div class="mx-auto w-full max-w-sm lg:w-96">
        <div>
          <img
            class="w-24"
            src="/lg-logo.svg"
            alt="USchool"
          />
          <h2 class="mt-6 text-2xl font-extrabold text-gray-900">
            Sign in to your account
          </h2>
          <p class="mt-2 text-sm text-gray-600">
            Or
            {{ ' ' }}
            <a
              href="#"
              class="font-medium text-indigo-600 hover:text-indigo-500"
            >
              search for your school here
            </a>
          </p>
        </div>

        <div class="mt-8">
          <div>
            <div>
              <p class="text-sm font-medium text-gray-700">Sign in with</p>

              <div class="mt-1 grid grid-cols-3 gap-3">
                <div>
                  <a
                    href="#"
                    class="w-full inline-flex justify-center py-2 px-4 border border-gray-300 rounded-md shadow-sm bg-white text-sm font-medium text-gray-500 hover:bg-gray-50"
                  >
                    <span class="sr-only">Sign in with Facebook</span>
                    <svg
                      class="w-5 h-5"
                      aria-hidden="true"
                      fill="currentColor"
                      viewBox="0 0 20 20"
                    >
                      <path
                        fill-rule="evenodd"
                        d="M20 10c0-5.523-4.477-10-10-10S0 4.477 0 10c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V10h2.54V7.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V10h2.773l-.443 2.89h-2.33v6.988C16.343 19.128 20 14.991 20 10z"
                        clip-rule="evenodd"
                      />
                    </svg>
                  </a>
                </div>

                <div>
                  <a
                    href="#"
                    class="w-full inline-flex justify-center py-2 px-4 border border-gray-300 rounded-md shadow-sm bg-white text-sm font-medium text-gray-500 hover:bg-gray-50"
                  >
                    <span class="sr-only">Sign in with Twitter</span>
                    <svg
                      class="w-5 h-5"
                      aria-hidden="true"
                      fill="currentColor"
                      viewBox="0 0 20 20"
                    >
                      <path
                        d="M6.29 18.251c7.547 0 11.675-6.253 11.675-11.675 0-.178 0-.355-.012-.53A8.348 8.348 0 0020 3.92a8.19 8.19 0 01-2.357.646 4.118 4.118 0 001.804-2.27 8.224 8.224 0 01-2.605.996 4.107 4.107 0 00-6.993 3.743 11.65 11.65 0 01-8.457-4.287 4.106 4.106 0 001.27 5.477A4.073 4.073 0 01.8 7.713v.052a4.105 4.105 0 003.292 4.022 4.095 4.095 0 01-1.853.07 4.108 4.108 0 003.834 2.85A8.233 8.233 0 010 16.407a11.616 11.616 0 006.29 1.84"
                      />
                    </svg>
                  </a>
                </div>

                <div>
                  <a
                    href="#"
                    class="w-full inline-flex justify-center py-2 px-4 border border-gray-300 rounded-md shadow-sm bg-white text-sm font-medium text-gray-500 hover:bg-gray-50"
                  >
                    <span class="sr-only">Sign in with GitHub</span>
                    <svg
                      class="w-5 h-5"
                      aria-hidden="true"
                      fill="currentColor"
                      viewBox="0 0 20 20"
                    >
                      <path
                        fill-rule="evenodd"
                        d="M10 0C4.477 0 0 4.484 0 10.017c0 4.425 2.865 8.18 6.839 9.504.5.092.682-.217.682-.483 0-.237-.008-.868-.013-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466-.908-.62.069-.608.069-.608 1.003.07 1.531 1.032 1.531 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.029-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0110 4.844c.85.004 1.705.115 2.504.337 1.909-1.296 2.747-1.027 2.747-1.027.546 1.379.203 2.398.1 2.651.64.7 1.028 1.595 1.028 2.688 0 3.848-2.339 4.695-4.566 4.942.359.31.678.921.678 1.856 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482A10.019 10.019 0 0020 10.017C20 4.484 15.522 0 10 0z"
                        clip-rule="evenodd"
                      />
                    </svg>
                  </a>
                </div>
              </div>
            </div>

            <div class="mt-6 relative">
              <div
                class="absolute inset-0 flex items-center"
                aria-hidden="true"
              >
                <div class="w-full border-t border-gray-300"/>
              </div>
              <div class="relative flex justify-center text-sm">
                <span class="px-2 bg-white text-gray-500">
                  Or continue with
                </span>
              </div>
            </div>
          </div>

          <div class="mt-6">
            <el-form :model="ruleForm" :rules="rules" ref="ruleForm">
              <div>
                <el-form-item prop="email">
                  <label
                    for="email"
                    class="block text-sm font-medium text-gray-700"
                  >
                    Email address
                  </label>
                  <div class="mt-1">
                    <el-input
                      placeholder="Please enter your email address"
                      auto-complete="email"
                      v-model="ruleForm.email"
                      autocomplete="on"
                      clearable
                    >
                    </el-input>
                  </div>
                </el-form-item>
              </div>
              <div class="space-y-1">
                <el-form-item prop="password">
                  <label
                    for="password"
                    class="block text-sm font-medium text-gray-700"
                  >
                    Password
                  </label>
                  <div class="mt-1">
                    <el-input
                      placeholder="Please input password"
                      autocomplete="on"
                      v-model="ruleForm.password"
                      show-password
                    >
                    </el-input>
                  </div>
                </el-form-item>
              </div>

              <div class="flex items-center justify-between">
                <el-form-item>
                  <div class="flex items-center">
                    <el-checkbox v-model="ruleForm.remember_me">
                      Remember me
                    </el-checkbox
                    >
                  </div>
                </el-form-item>
                <el-form-item>
                  <div class="text-sm">
                    <NuxtLink
                      to="/forgot-password"
                      class="font-medium text-indigo-600 hover:text-indigo-500"
                    >
                      Forgot your password?
                    </NuxtLink>
                  </div>
                </el-form-item>
              </div>
              <div>
                <el-form-item>
                  <button
                    type="submit"
                    @click.prevent="submitForm('ruleForm')"
                    class="w-full flex justify-center py-2 px-4 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
                  >
                    Sign in
                  </button>
                </el-form-item>
              </div>
            </el-form>
          </div>
        </div>
      </div>
    </div>
    <div
      class="hidden lg:block relative flex-1"
      style="background: linear-gradient(133.64deg,#5c61a3,#105ba6 100%,#09203f 0) !important;"
    >
      <img
        class="absolute inset-0 h-full w-full object-cover"
        src="~/assets/images/login.png"
        alt=""
      />
    </div>
  </div>
</template>

<script>
import {userStore} from "~/stores/user";
export default {
  layout: 'auth',
  data() {
    return {
      ruleForm: {
        password: '',
        email: '',
        remember_me: false,
      },
      rules: {
        email: [
          {
            required: true,
            message: 'Please input Activity name',
            trigger: 'blur',
          },
          {
            type: 'email',
            message: 'Please enter a valid email',
            trigger: 'blur',
          },
          {
            min: 6,
            max: 50,
            message: 'Length should be 3 to 50',
            trigger: 'blur',
          },
        ],
        password: [
          {
            required: true,
            message: 'Please enter a password',
            trigger: 'blur',
          },
          {
            min: 3,
            max: 50,
            message: 'Length should be 3 to 5',
            trigger: 'blur',
          },
        ],
      },
    }
  },
  methods: {
    async submitForm(formName) {
      this.$refs[formName].validate(async (valid) => {
        if (valid) {
          try {
            await this.$auth.loginWith('USchool', {data: this.ruleForm})
            this.$message({
              message: 'welcome back ' + this.$auth.user.first_name + ' ' + this.$auth.user.last_name,
              type: 'success',
            })
            userStore().user = this.$auth.user;
            localStorage.setItem('user', JSON.stringify(this.$auth.user));
            switch (this.$auth.user?.roles){
              case 'SUPER_ADMIN':
                await this.$router.push({path: '/admin'})
                break;
              case 'ADMIN':
                await this.$router.push({path: '/admin'})
                break;
              case 'STUDENT':
                await this.$router.push({path: '/student'})
                break;
              case 'TEACHER':
                await this.$router.push({path: '/teacher'})
                break;
              default:
                await this.$router.push({path: '/admin'})
                break;
            }
          } catch (err) {
            this.$message({
              message: 'Email or password is incorrect',
              type: 'error',
            })
            console.error(err);
          }
        } else {
          this.$notify({
            title: 'Warning',
            message: 'please enter all fields',
            type: 'warning',
          })
          return false
        }
      })
    },
  },
}
</script>

<script setup>
</script>
