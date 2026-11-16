Route::middleware(['auth', 'role:1,2'])->get('/nilai', fn () => view('nilai'));
