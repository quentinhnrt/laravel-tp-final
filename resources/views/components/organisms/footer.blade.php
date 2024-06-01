<footer
    id="footer"
    class="fixed bottom-0 left-0 z-10 block w-screen rounded-lg border-t-2 border-gray-50 px-10 py-4 text-xs text-black backdrop-blur md:py-10"
>
    @section("footer")
        <p>ecv &copy;{{ date("Y") }}</p>
    @endsection

    @yield("footer")
</footer>
