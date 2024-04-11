<script setup>
import { Head, Link, useForm } from '@inertiajs/vue3';
import AuthenticationCard from '@/Components/AuthenticationCard.vue';
import AuthenticationCardLogo from '@/Components/AuthenticationCardLogo.vue';
import Checkbox from '@/Components/Checkbox.vue';
import InputError from '@/Components/InputError.vue';
import InputLabel from '@/Components/InputLabel.vue';
import PrimaryButton from '@/Components/PrimaryButton.vue';
import TextInput from '@/Components/TextInput.vue';

defineProps({
    canResetPassword: Boolean,
    status: String,
});

const form = useForm({
    email: '',
    password: '',
    remember: false,
});

const submit = () => {
    form.transform(data => ({
        ...data,
        remember: form.remember ? 'on' : '',
    })).post(route('login'), {
        onFinish: () => form.reset('password'),
    });
};
</script>

<template>
   
    <Head title="Log in" />

    <AuthenticationCard>
        <div class="welcome-banner">
              <h1 class="welcome-text">WELCOME TO GRACE SCHOOLS LOGIN PAGE</h1>
        </div>
       

        <div v-if="status" class="mb-4 font-medium text-sm text-green-600">
            {{ status }}
        </div>
        <form @submit.prevent="submit" class="w-96"> <!-- Adjust width as needed -->
            <div class="mb-4">
                <InputLabel for="email" value="Email" />
                <input
                    id="email"
                    v-model="form.email"
                    type="email"
                    class="form-control mt-1 form-control-lg"
                    required
                    autofocus
                    autocomplete="username"
                />
                <InputError class="mt-2" :message="form.errors.email" />
            </div>

            <div class="mt-4">
                <InputLabel for="password" value="Password" />
                <input
                    id="password"
                    v-model="form.password"
                    type="password"
                    class="form-control mt-1 form-control-lg" 
                    required
                    autocomplete="current-password"
                />
                <InputError class="mt-2" :message="form.errors.password" />
            </div>
            <div class="flex justify-end mt-4">
            <PrimaryButton class="ml-4 btn-lg" :class="{ 'opacity-25': form.processing }" :disabled="form.processing" style="margin-right: 20px;"> <!-- Added btn-lg class for larger button -->
                    Log in
            </PrimaryButton>
            </div>

            <div class="mt-4">
                <label class="form-check-label">
                    <Checkbox v-model:checked="form.remember" name="remember" />
                    <span class="ml-2 text-lg text-gray-600">Remember me</span> <!-- Increased text size -->
                </label>
            </div>

            <div class="flex items-center justify-end mt-4">
                <Link v-if="canResetPassword" :href="route('password.request')" class="text-lg text-muted"> <!-- Increased text size -->
                    Forgot your password?
                </Link>

          
            </div>
        </form>

    </AuthenticationCard>
</template>

<style scoped>
    .welcome-banner {
        background-color: black;
        color: white;
        border-radius: 10px;
        padding: 20px;
        text-align: center;
    }

    .welcome-text {
        font-size: 24px; /* Adjust font size as needed */
        margin: 0;
    }
    .btn-lg {
        width: 100%; /* Make inputs and button take up equal width */
        padding-left: 40%;
        
    }
    
    @media screen and (max-width: 640px) {
        .w-96 {
            width: 100% !important; /* Set width to 100% for smaller screens */
            max-width: none !important; /* Remove max-width constraint */
            margin: 0 auto !important; /* Center the form */
        }
    }
</style>
