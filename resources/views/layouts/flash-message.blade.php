@if ($message = Session::get('success'))
    <div id="toast-container" class="toast-top-right">
        <div class="toast toast-success" aria-live="polite">
            <button type="button" class="toast-close-button" role="button">×</button>
            <div class="toast-message">{{ $message }}</div>
        </div>
    </div>
@endif

@if ($message = Session::get('error'))
    <div id="toast-container" class="toast-top-right">
        <div class="toast toast-error" aria-live="polite">
            <button type="button" class="toast-close-button" role="button">×</button>
            <div class="toast-message">{{ $message }}</div>
        </div>
    </div>
@endif

@if ($message = Session::get('warning'))
    <div id="toast-container" class="toast-top-right">
        <div class="toast toast-warning" aria-live="polite">
            <button type="button" class="toast-close-button" role="button">×</button>
            <div class="toast-message">{{ $message }}</div>
        </div>
    </div>
@endif

@if ($message = Session::get('info'))
    <div id="toast-container" class="toast-top-right">
        <div class="toast toast-info" aria-live="polite">
            <button type="button" class="toast-close-button" role="button">×</button>
            <div class="toast-message">{{ $message }}</div>
        </div>
    </div>
@endif

@if ($errors->any())
    <div id="toast-container" class="toast-top-right">
        <div class="toast toast-warning" aria-live="polite">
            <button type="button" class="toast-close-button" role="button">×</button>
            <div class="toast-message">{{ $message }}</div>
        </div>
    </div>
@endif
