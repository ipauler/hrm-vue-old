<?php
namespace App\Http\Controllers;

use App\Models\Candidate;
use App\Repositories\Candidate\CandidateRepository;
use Illuminate\Http\Request;

class CandidateController extends Controller {

    private $candidate;

    public function __construct ( CandidateRepository $candidate ) {
        $this->candidate = $candidate;
    }

    /**
     * Return list of candidates
     *
     * @return static[]
     */
    public function index () {
        return response()->json( $this->candidate->all()->toArray());
//        return view( 'candidate.index' )->with( 'candidates', $this->candidate->all() );
    }

    /**
     * Get the specified candidate
     *
     * @param  int $id
     *
     * @return static[]
     */
    public function profile ( $id ) {
        return view( 'candidate.profile' )->with( 'candidate', $this->candidate->find( $id ) );
    }

    /**
     * Route to create page
     *
     * @return \Illuminate\View\View
     */
    public function create () {
        return view( 'candidate.create' );
    }

    /**
     * Create candidate
     *
     * @return Response
     */
    public function store(Request $request) {
        $candidate = $this->candidate->create($request->all());
        return response()->json($candidate);
    }

    /**
     * Update the specified candidate
     *
     * @param  Candidate $candidate
     * @param  Request $request
     *
     * @return Response
     */
    public function update(Candidate $candidate, Request $request) {
        $this->candidate->update($candidate, $request->all());
        return response()->json(['status' => true]);
    }

    /**
     * Delete the specified candidate
     *
     * @param  Candidate $candidate
     *
     * @return bool
     */
    public function delete(Candidate $candidate) {
        $this->candidate->delete($candidate);
        return response()->json(['status' => true]);
    }
}
