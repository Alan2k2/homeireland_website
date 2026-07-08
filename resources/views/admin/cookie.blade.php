@extends('layouts.admin.main')
@section('content')
<!-- Include Quill stylesheet -->
<link href="https://cdn.jsdelivr.net/npm/quill@2.0.3/dist/quill.snow.css" rel="stylesheet" />

<style>
    /* Ensure consistent editor height and alignment */
    .quill-editor {
        height: 150px; /* Set editor height */
        background-color: #fff;
        border: 1px solid #ccc;
        border-radius: 5px;
    }

    .editor-container {
        display: flex;
        flex-direction: column;
        justify-content: flex-start;
        align-items: center;
        text-align: center;
        padding: 15px;
    }

    h4 {
        margin-bottom: 10px;
        font-weight: bold;
    }

    p {
        margin-bottom: 10px;
        font-size: 0.9rem;
        color: gray;
    }

    /* Fix responsive spacing */
    @media (max-width: 768px) {
        .editor-container {
            padding: 10px;
            width: 100%;
        }

        h4 {
            font-size: 1.2rem;
        }
    }
</style>

<div class="container my-4">
    <form action="{{ route('admin.cookie') }}" method="POST">
        @csrf
        @method('PUT')
        <div class="row gy-4">
        @php
            // Fallback in case term is null
            $privacy = $term->privacy ?? '';
            $equality = $term->equality ?? '';
            $cookie = $term->cookie ?? '';
            $terms = $term->terms ?? '';
        @endphp
            <!-- Privacy Section -->
            <div class="col-12 col-md-6 col-lg-3">
                <div class="editor-container">
                    <h4>Privacy</h4>
                    <p>Edit the privacy note</p>
                    <p class="text-danger">Use &lt;br&gt; for break the sentance. </p>
                    <div>
                        <textarea name="privacy" id="privacyInput" id="privacy" class="quill-editor" rows="10" cols="35">{!! $privacy !!}</textarea>
                    </div>
                    
                </div>
            </div>
            <!-- Equality Section -->
            <div class="col-12 col-md-6 col-lg-3">
                <div class="editor-container">
                    <h4>Equality</h4>
                    <p>Edit the equality note</p>
                    <p class="text-danger">Use &lt;br&gt; for break the sentance. </p>
                    <div>
                        <textarea name="equality" id="equalityInput" id="equality" class="quill-editor" rows="10" cols="35">{!! $equality !!}</textarea>
                    </div>
                    
                </div>
            </div>
            <!-- Cookie Section -->
            <div class="col-12 col-md-6 col-lg-3">
                <div class="editor-container">
                    <h4>Cookie</h4>
                    <p>Edit the cookie note</p>
                    <p class="text-danger">Use &lt;br&gt; for break the sentance. </p>
                    <div>
                        <textarea name="cookie" id="cookieInput" id="cookie" class="quill-editor" rows="10" cols="35">{!! $cookie !!}</textarea>
                    </div>
                    
                </div>
            </div>
            <!-- Terms Section -->
            <div class="col-12 col-md-6 col-lg-3">
                <div class="editor-container">
                    <h4>Terms</h4>
                    <p>Edit the terms note</p>
                    <p class="text-danger">Use &lt;br&gt; for break the sentance. </p>
                    <div>
                        <textarea name="terms" id="termsInput" id="terms" class="quill-editor" rows="10" cols="35">{!! $terms !!}</textarea>
                    </div>
                    
                </div>
            </div>
        </div>
        <div class="text-center mt-4">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </form>
</div>


<!-- Include Quill JS -->
<script src="https://cdn.jsdelivr.net/npm/quill@2.0.3/dist/quill.js"></script>
<script>
    // Initialize Quill editors for each section
    var privacyEditor = new Quill('#privacy', { theme: 'snow' });
    var equalityEditor = new Quill('#equality', { theme: 'snow' });
    var cookieEditor = new Quill('#cookie', { theme: 'snow' });
    var termsEditor = new Quill('#terms', { theme: 'snow' });

    document.querySelector('form').addEventListener('submit', function() {
        // Capture the content of each editor and assign it to the hidden inputs
        document.getElementById('privacyInput').value = privacyEditor.root.innerHTML;
        document.getElementById('equalityInput').value = equalityEditor.root.innerHTML;
        document.getElementById('cookieInput').value = cookieEditor.root.innerHTML;
        document.getElementById('termsInput').value = termsEditor.root.innerHTML;
    });
</script>

@endsection