@extends('layout.main')

@section('main-section')
<div class="container-fluid">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title fw-semibold mb-4">Buttons</h5>
              <div class="card">
                <div class="card-body p-4">
                  <button type="button" class="btn btn-primary m-1">Primary</button>
                  <button type="button" class="btn btn-secondary m-1">Secondary</button>
                  <button type="button" class="btn btn-success m-1">Success</button>
                  <button type="button" class="btn btn-danger m-1">Danger</button>
                  <button type="button" class="btn btn-warning m-1">Warning</button>
                  <button type="button" class="btn btn-info m-1">Info</button>
                  <button type="button" class="btn btn-light m-1">Light</button>
                  <button type="button" class="btn btn-dark m-1">Dark</button>
                  <button type="button" class="btn btn-link m-1">Link</button>
                </div>
              </div>
              <h5 class="card-title fw-semibold mb-4">Outline buttons</h5>
              <div class="card mb-0">
                <div class="card-body p-4">
                  <button type="button" class="btn btn-outline-primary m-1">Primary</button>
                  <button type="button" class="btn btn-outline-secondary m-1">Secondary</button>
                  <button type="button" class="btn btn-outline-success m-1">Success</button>
                  <button type="button" class="btn btn-outline-danger m-1">Danger</button>
                  <button type="button" class="btn btn-outline-warning m-1">Warning</button>
                  <button type="button" class="btn btn-outline-info m-1">Info</button>
                  <button type="button" class="btn btn-outline-light m-1">Light</button>
                  <button type="button" class="btn btn-outline-dark m-1">Dark</button>
                  <button type="button" class="btn btn-outline-link m-1">Link</button>
                </div>
              </div>
            </div>
          </div>
        </div>
@endsection