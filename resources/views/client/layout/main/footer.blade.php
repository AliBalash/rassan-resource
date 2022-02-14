<footer id="footer" class="uk-dark " style="background-color: #333333">
    <div class="uk-text-center uk-padding uk-text-white">{{trans('global.copyright')}}</div>
</footer>


<script src="/assets/client/js/jquery-3.6.0.min.js"></script>
<script src="/assets/client/js/uikit.min.js"></script>
<script src="/assets/client/js/uikit-icons.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/simplebar@latest/dist/simplebar.min.js"></script>

@stack('scripts')

@livewireScripts

@yield("script")

</body>
</html>
