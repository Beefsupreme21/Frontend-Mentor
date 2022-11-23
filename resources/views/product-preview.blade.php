<style>
    .base-font {
        font-family: 'Montserrat', sans-serif;
    }

    .title-font {
        font-family: 'Fraunces', serif;
    }
</style>

<x-layout>
    <main class="bg-[#F3EAE3] text-gray-500 min-h-screen border border-red-500 base-font pt-4">
        <div class="md:flex m-auto max-w-[700px]">
            <picture>
                <img src="/images/image-product-mobile.jpg" class="md:hidden rounded-t-lg" alt="">
                <img src="/images/image-product-desktop.jpg" class="hidden md:block rounded-l-lg" alt="">
            </picture>
            <div class="bg-white p-6 rounded-b-lg md:rounded-r-lg md:rounded-bl-none ">
                <p class="uppercase mb-2">P e r f u m e</p>
                <h1 class="title-font text-black text-4xl font-bold mb-3">Gabrielle Essence Eau De Parfum</h1>
                <p class="mb-4">A floral, solar and voluptuous interpretation composed by Olivier Polge, Perfumer-Creator for the House of CHANEL.</p>
                <div class="flex mb-4 items-center">
                    <p class="text-4xl text-[#3D8168] title-font pr-4">$149.99</p>
                    <p>$169.99</p>
                </div>
                <button class="bg-[#3D8168] flex justify-center items-center w-full rounded-lg py-3 text-white">
                    <svg width="15" height="16" xmlns="http://www.w3.org/2000/svg">
                        <path d="M14.383 10.388a2.397 2.397 0 0 0-1.518-2.222l1.494-5.593a.8.8 0 0 0-.144-.695.8.8 0 0 0-.631-.28H2.637L2.373.591A.8.8 0 0 0 1.598 0H0v1.598h.983l1.982 7.4a.8.8 0 0 0 .799.59h8.222a.8.8 0 0 1 0 1.599H1.598a.8.8 0 1 0 0 1.598h.943a2.397 2.397 0 1 0 4.507 0h1.885a2.397 2.397 0 1 0 4.331-.376 2.397 2.397 0 0 0 1.12-2.021ZM11.26 7.99H4.395L3.068 3.196h9.477L11.26 7.991Zm-6.465 6.392a.8.8 0 1 1 0-1.598.8.8 0 0 1 0 1.598Zm6.393 0a.8.8 0 1 1 0-1.598.8.8 0 0 1 0 1.598Z" 
                        fill="#FFF"/>
                    </svg>
                    <span class="pl-2">Add to Cart</span>                    
                </button>
            </div>
        </div>
    </main>
</x-layout>