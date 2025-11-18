<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Laravel 12 User Location - ItStuffSolutiotions.io</title>

    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body { background: #f8fafc; font-family: Inter, system-ui, -apple-system, "Segoe UI", Roboto, "Helvetica Neue", Arial; }
        .card-lg { border-radius: .9rem; box-shadow: 0 6px 30px rgba(16,24,40,0.08); }
        .muted { color: #6c757d; }
        .value { font-weight: 600; }
    </style>
</head>
<body>
    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-12 col-md-12 col-lg-10">
                <div class="card card-lg overflow-hidden">
                    <div class="card-body p-4 p-md-5">
                        <div class="d-flex align-items-start justify-content-between mb-3">
                            <div>
                                <h3 class="mb-0">Laravel 12 How to Get User Location from IP Address Example - ItStuffSolutiotions.io</h3>
                                <p class="muted mb-0">Get location info from IP using <code>stevebauman/location</code>.</p>
                            </div>
                           
                        </div>

                        @if($position)
                            <div class="row g-3">
                                <div class="col-12 col-md-6">
                                    <div class="p-3 bg-white rounded">
                                        <h6 class="text-uppercase muted mb-2">IP & Provider</h6>
                                        <p class="mb-1"><span class="muted">Client IP:</span> <span class="value">{{ $position->ip ?? '-' }}</span></p>
                                        <p class="mb-0"><span class="muted">ISP / Provider:</span> <span class="value">{{ $position->isp ?? '-' }}</span></p>
                                    </div>
                                </div>

                                <div class="col-12 col-md-6">
                                    <div class="p-3 bg-white rounded">
                                        <h6 class="text-uppercase muted mb-2">Country & Region</h6>
                                        <p class="mb-1"><span class="muted">Country:</span> <span class="value">{{ $position->countryName ?? '-' }}</span> <small class="text-muted">({{ $position->countryCode ?? '-' }})</small></p>
                                        <p class="mb-0"><span class="muted">Region / State:</span> <span class="value">{{ $position->regionName ?? '-' }}</span> <small class="text-muted">({{ $position->regionCode ?? '-' }})</small></p>
                                    </div>
                                </div>

                                <div class="col-12">
                                    <div class="p-3 bg-white rounded">
                                        <h6 class="text-uppercase muted mb-2">City & Postal</h6>
                                        <div class="row">
                                            <div class="col-12 col-md-6">
                                                <p class="mb-1"><span class="muted">City:</span> <span class="value">{{ $position->cityName ?? '-' }}</span></p>
                                                <p class="mb-0"><span class="muted">Postal / ZIP:</span> <span class="value">{{ $position->zipCode ?? $position->postalCode ?? '-' }}</span></p>
                                            </div>
                                             <div class="col-12 col-md-6">
                                                <p class="mb-1"><span class="muted">Time Zone:</span> <span class="value">{{ $position->timeZone ?? $position->timezone ?? '-' }}</span></p>
                                                <p class="mb-0"><span class="muted">Local Time (if available):</span> <span class="value">{{ isset($position->timeZone) ? now()->setTimezone($position->timeZone)->format('d M Y, H:i') : '-' }}</span></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-12">
                                    <div class="p-3 bg-white rounded">
                                        <h6 class="text-uppercase muted mb-2">Coordinates & Time</h6>
                                        <div class="row">
                                            <div class="col-12 col-md-6">
                                                <p class="mb-1"><span class="muted">Latitude:</span> <span class="value">{{ $position->latitude ?? '-' }}</span></p>
                                                <p class="mb-0"><span class="muted">Longitude:</span> <span class="value">{{ $position->longitude ?? '-' }}</span></p>
                                            </div>
                                            <div class="col-12 col-md-6">
                                                <p class="mb-1"><span class="muted">Continent:</span> <span class="value">{{ $position->continent ?? '-' }}</span></p>
                                                <p class="mb-0"><span class="muted">Currency:</span> <span class="value">{{ $position->currency ?? '-' }}</span></p>
                                            </div>
                                           
                                        </div>
                                    </div>
                                </div>

                                <div class="col-12 text-end">
                                    <small class="text-muted">Note: Use a public IP for testing (not 127.0.0.1 / 192.168.x.x). Disable package testing mode to get the real client IP.</small>
                                </div>
                            </div>
                        @else
                            <div class="alert alert-warning mb-0">
                                <h6 class="mb-1">Location not found</h6>
                                <p class="mb-0">Could not determine location from the provided IP. Make sure you are testing with a public IP and that the package testing mode is disabled in <code>config/location.php</code>.</p>
                            </div>
                        @endif

                    </div>
                </div>

                <div class="text-center mt-3 text-muted small">
                    &copy; {{ date('Y') }} ItStuffSolutiotions.io — Laravel 12 example
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap 5 JS (optional) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
