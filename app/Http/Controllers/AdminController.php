<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SilderModel;
use App\Models\TeamsModel;
use App\Models\NewpaperModel;
use App\Models\User;
use App\Models\ContactModel;
use App\Models\FundPdfModel;
use App\Models\PartnetModel;
use App\Models\PortfiloModel;

class AdminController extends Controller
{
    public function index()
    {
        $contact = ContactModel::orderBy('id', 'desc')->get();
        return view('admin.index', compact('contact'));
    }
    public function silder()
    {

        $silderModel = SilderModel::orderBy('id', 'desc')->get();
        return view('admin.silder', compact('silderModel'));
    }
    public function teams()
    {
        $teamsModel = TeamsModel::orderBy('id', 'desc')->get();
        return view('admin.teams', compact('teamsModel'));
    }
    public function users()
    {
        $users = User::orderBy('id', 'desc')->get();
        return view('admin.users', compact('users'));
    }
    public function savesilder(Request $request)
    {
        // Validate
        $request->validate([
            'id' => 'nullable|integer',
            'title' => 'required|string|max:255',
            'image' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048'
        ]);

        $id = $request->id;

        // ✅ Fix: Proper null-safe model initialization
        $silderModel = null;
        if ($id) {
            $silderModel = SilderModel::find($id);
            if (!$silderModel) {
                return response()->json([
                    'status' => false,
                    'message' => 'Slider not found'
                ], 404);
            }
        } else {
            $silderModel = new SilderModel();
        }

        // Update Title
        $silderModel->title = $request->title;

        // If new image given — upload & replace old one
        if ($request->hasFile('image') && $request->file('image')->isValid()) {
            // Delete old image if exists (check both locations)
            if (!empty($silderModel->img)) {
                if (file_exists(public_html_path($silderModel->img))) {
                    unlink(public_html_path($silderModel->img));
                } elseif (file_exists(public_path($silderModel->img))) {
                    unlink(public_path($silderModel->img));
                }
            }

            $file = $request->file('image');
            $filename = time() . '_' . $file->getClientOriginalName();
            
            // Upload to public_html for GoDaddy compatibility
            $uploadDir = public_html_path('uploads/slider');
            if (!is_dir($uploadDir)) {
                mkdir($uploadDir, 0755, true);
            }
            $file->move($uploadDir, $filename);
            $silderModel->img = 'uploads/slider/' . $filename;
        }

        // Set creator safely
        if (session('user') && isset(session('user')->id)) {
            $silderModel->createdby = session('user')->id;
        }

        $silderModel->save();

        return response()->json([
            'status' => true,
            'message' => $id ? 'Slider updated successfully' : 'Slider added successfully',
            'image_path' => $silderModel->img
        ]);
    }

    public function silderedit(Request $request)
    {
        if ($request->ajax()) {

            $sales_ledgerModel = new SilderModel();
            $leadsdetails = $sales_ledgerModel->where('id', $request->id)->orderBy('id', 'DESC')->first();
            return response()->json($leadsdetails);
        }
    }
    public function deletesilder(Request $request)
    {
        $sales_ledgerModel = new SilderModel();
        $salesleger = $sales_ledgerModel->where('id', $request->id)->orderBy('id', 'DESC')->first();
        if (!empty($salesleger)) {
            // Delete image file from disk (check both locations)
            if (!empty($salesleger->img)) {
                if (file_exists(public_html_path($salesleger->img))) {
                    unlink(public_html_path($salesleger->img));
                } elseif (file_exists(public_path($salesleger->img))) {
                    unlink(public_path($salesleger->img));
                }
            }
            $salesleger->delete();
            $response["status"] = true;
        } else {
            $response["status"] = false;
        }
        return response()->json($response);
    }
    //TeamsModel
    public function deleteteams(Request $request)
    {
        $sales_ledgerModel = new TeamsModel();
        $salesleger = $sales_ledgerModel->where('id', $request->id)->orderBy('id', 'DESC')->first();
        if (!empty($salesleger)) {
            // Delete image file from disk (check both locations)
            if (!empty($salesleger->img)) {
                if (file_exists(public_html_path($salesleger->img))) {
                    unlink(public_html_path($salesleger->img));
                } elseif (file_exists(public_path($salesleger->img))) {
                    unlink(public_path($salesleger->img));
                }
            }
            $salesleger->delete();
            $response["status"] = true;
        } else {
            $response["status"] = false;
        }
        return response()->json($response);
    }
    public function teamsedit(Request $request)
    {
        if ($request->ajax()) {

            $sales_ledgerModel = new TeamsModel();
            $leadsdetails = $sales_ledgerModel->where('id', $request->id)->orderBy('id', 'DESC')->first();
            return response()->json($leadsdetails);
        }
    }
    public function saveteams(Request $request)
    {
        // Validate
        $request->validate([
            'name' => 'required|string|max:255',
            'id' => 'nullable|integer', // Add ID validation
            'image' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
            'description' => 'required|string'
        ]);

        $id = $request->id;

        // Fetch existing team (if editing) - fix null handling
        $TeamsModel = null;
        if ($id) {
            $TeamsModel = TeamsModel::find($id);
            if (!$TeamsModel) {
                return response()->json([
                    'status' => false,
                    'message' => 'Team not found'
                ], 404);
            }
        } else {
            $TeamsModel = new TeamsModel();
        }

        // Update fields
        $TeamsModel->name = $request->name;
        $TeamsModel->description = $request->description;

        // Handle image upload
        if ($request->hasFile('image') && $request->file('image')->isValid()) {
            // Delete old image if exists (check both locations)
            if (!empty($TeamsModel->img)) {
                if (file_exists(public_html_path($TeamsModel->img))) {
                    unlink(public_html_path($TeamsModel->img));
                } elseif (file_exists(public_path($TeamsModel->img))) {
                    unlink(public_path($TeamsModel->img));
                }
            }

            $file = $request->file('image');
            $filename = time() . '_' . $file->getClientOriginalName();
            
            // Upload to public_html for GoDaddy compatibility
            $uploadDir = public_html_path('uploads/teams');
            if (!is_dir($uploadDir)) {
                mkdir($uploadDir, 0755, true);
            }
            $file->move($uploadDir, $filename);
            $TeamsModel->img = 'uploads/teams/' . $filename;
        }

        // Set creator (check session exists)
        if (session('user') && isset(session('user')->id)) {
            $TeamsModel->createdby = session('user')->id;
        }

        $TeamsModel->save();

        return response()->json([
            'status' => true,
            'message' => $id ? 'Team updated successfully' : 'Team added successfully',
            'image_path' => $TeamsModel->img
        ]);
    }

    public function teamview(Request $request)
    {
        $TeamsModel = new TeamsModel();
        $teamdetails = $TeamsModel->where('id', $request->id)->orderBy('id', 'DESC')->first();
    }
    //NewletterModel
    public function newletter()
    {
        $newpaper = NewpaperModel::orderBy('id', 'desc')->get();
        return view('admin.newspaper', compact('newpaper'));
    }
    public function savenewletter(Request $request)
    {
        // ✅ Fixed validation
        $request->validate([
            'id' => 'nullable|integer',
            'name' => 'required|string|max:255',
            'image' => 'nullable|file|mimes:pdf|max:5120', // PDF
            'title' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048', // Image
        ]);

        $id = $request->id;

        // ✅ Fix null handling - proper model initialization
        $NewpaperModel = null;
        if ($id) {
            $NewpaperModel = NewpaperModel::find($id);
            if (!$NewpaperModel) {
                return response()->json([
                    'status' => false,
                    'message' => 'Newsletter not found'
                ], 404);
            }
        } else {
            $NewpaperModel = new NewpaperModel();
        }

        $NewpaperModel->name = $request->name;

        /* ===== PDF FILE ===== */
        if ($request->hasFile('image') && $request->file('image')->isValid()) {
            // Delete old PDF if exists (check both locations)
            if (!empty($NewpaperModel->file)) {
                if (file_exists(public_html_path($NewpaperModel->file))) {
                    unlink(public_html_path($NewpaperModel->file));
                } elseif (file_exists(public_path($NewpaperModel->file))) {
                    unlink(public_path($NewpaperModel->file));
                }
            }

            $file = $request->file('image');
            $filename = time() . '_' . $file->getClientOriginalName();
            
            // Ensure directory exists in public_html
            $uploadDir = public_html_path('uploads/newsletter');
            if (!is_dir($uploadDir)) {
                mkdir($uploadDir, 0755, true);
            }
            
            $file->move($uploadDir, $filename);
            $NewpaperModel->file = 'uploads/newsletter/' . $filename;
        }

        /* ===== TITLE IMAGE ===== */
        if ($request->hasFile('title') && $request->file('title')->isValid()) {
            // Delete old image if exists (check both locations)
            if (!empty($NewpaperModel->img)) {
                if (file_exists(public_html_path($NewpaperModel->img))) {
                    unlink(public_html_path($NewpaperModel->img));
                } elseif (file_exists(public_path($NewpaperModel->img))) {
                    unlink(public_path($NewpaperModel->img));
                }
            }

            $file = $request->file('title');
            $filename = time() . '_' . $file->getClientOriginalName();
            
            // Ensure directory exists in public_html
            $uploadDir = public_html_path('uploads/newsletter/title');
            if (!is_dir($uploadDir)) {
                mkdir($uploadDir, 0755, true);
            }
            
            $file->move($uploadDir, $filename);
            $NewpaperModel->img = 'uploads/newsletter/title/' . $filename;
        }

        // Set creator safely
        if (session('user') && isset(session('user')->id)) {
            $NewpaperModel->createdby = session('user')->id;
        }

        $NewpaperModel->save();

        return response()->json([
            'status' => true,
            'message' => $id ? 'Newsletter updated successfully' : 'Newsletter added successfully',
            'file' => $NewpaperModel->file,
            'image' => $NewpaperModel->img
        ]);
    }

    public function deletenewletter(Request $request)
    {
        $sales_ledgerModel = new NewpaperModel();
        $salesleger = $sales_ledgerModel->where('id', $request->id)->orderBy('id', 'DESC')->first();
        if (!empty($salesleger)) {
            // Delete PDF file from disk (check both locations)
            if (!empty($salesleger->file)) {
                if (file_exists(public_html_path($salesleger->file))) {
                    unlink(public_html_path($salesleger->file));
                } elseif (file_exists(public_path($salesleger->file))) {
                    unlink(public_path($salesleger->file));
                }
            }
            // Delete title image from disk (check both locations)
            if (!empty($salesleger->img)) {
                if (file_exists(public_html_path($salesleger->img))) {
                    unlink(public_html_path($salesleger->img));
                } elseif (file_exists(public_path($salesleger->img))) {
                    unlink(public_path($salesleger->img));
                }
            }
            $salesleger->delete();
            $response["status"] = true;
        } else {
            $response["status"] = false;
        }
        return response()->json($response);
    }
    public function newletteredit(Request $request)
    {
        if ($request->ajax()) {

            $sales_ledgerModel = new NewpaperModel();
            $leadsdetails = $sales_ledgerModel->where('id', $request->id)->orderBy('id', 'DESC')->first();
            return response()->json($leadsdetails);
        }
    }
    //Partnet & Assocate
    public function partner()
    {
        $newpaper = PartnetModel::orderBy('id', 'desc')->get();
        return view('admin.partner', compact('newpaper'));
    }
    public function savepartner(Request $request)
    {
        // Validate
        $request->validate([
            'id' => 'nullable|integer',
            'image' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
        ]);

        $id = $request->id;

        // Fix null handling - proper model initialization
        $PartnetModel = null;
        if ($id) {
            $PartnetModel = PartnetModel::find($id);
            if (!$PartnetModel) {
                return response()->json([
                    'status' => false,
                    'message' => 'Partner not found'
                ], 404);
            }
        } else {
            $PartnetModel = new PartnetModel();
        }

        // Handle image upload
        if ($request->hasFile('image') && $request->file('image')->isValid()) {
            // Delete old image safely (check both locations)
            if (!empty($PartnetModel->partner)) {
                if (file_exists(public_html_path($PartnetModel->partner))) {
                    unlink(public_html_path($PartnetModel->partner));
                } elseif (file_exists(public_path($PartnetModel->partner))) {
                    unlink(public_path($PartnetModel->partner));
                }
            }

            $file = $request->file('image');
            $filename = time() . '_' . $file->getClientOriginalName();
            
            // Upload to public_html for GoDaddy compatibility
            $uploadDir = public_html_path('uploads/partner');
            if (!is_dir($uploadDir)) {
                mkdir($uploadDir, 0755, true);
            }
            $file->move($uploadDir, $filename);
            $PartnetModel->partner = 'uploads/partner/' . $filename;
        } elseif (!$id) {
            return response()->json([
                'status' => false,
                'message' => 'Image is required for new partners'
            ], 422);
        }

        // Set creator safely
        if (session('user') && isset(session('user')->id)) {
            $PartnetModel->createdby = session('user')->id;
        }

        $PartnetModel->save();

        return response()->json([
            'status' => true,
            'message' => $id ? 'Partner updated successfully' : 'Partner added successfully',
            'image_path' => $PartnetModel->partner
        ]);
    }

    public function deletepartner(Request $request)
    {
        $sales_ledgerModel = new PartnetModel();
        $salesleger = $sales_ledgerModel->where('id', $request->id)->orderBy('id', 'DESC')->first();
        if (!empty($salesleger)) {
            // Delete image file from disk (check both locations)
            if (!empty($salesleger->partner)) {
                if (file_exists(public_html_path($salesleger->partner))) {
                    unlink(public_html_path($salesleger->partner));
                } elseif (file_exists(public_path($salesleger->partner))) {
                    unlink(public_path($salesleger->partner));
                }
            }
            $salesleger->delete();
            $response["status"] = true;
        } else {
            $response["status"] = false;
        }
        return response()->json($response);
    }
    public function partneredit(Request $request)
    {
        if ($request->ajax()) {

            $sales_ledgerModel = new PartnetModel();
            $leadsdetails = $sales_ledgerModel->where('id', $request->id)->orderBy('id', 'DESC')->first();
            return response()->json($leadsdetails);
        }
    }
    //Portfilo
    public function portfilo()
    {
        $newpaper = PortfiloModel::orderBy('id', 'desc')->get();
        return view('admin.addportfilo', compact('newpaper'));
    }
    public function saveportfilo(Request $request)
    {
        // Validate
        $request->validate([
            'id' => 'nullable|integer',
            'image' => 'required|image|mimes:jpg,jpeg,png,webp|max:2048', // Make required since no other fields
            'name'=>'required'
        ]);

        $id = $request->id;
        $name=$request->name;
        // Fetch existing portfolio (if editing) - fix null handling
        $PortfiloModel = null;
        if ($id) {
            $PortfiloModel = PortfiloModel::find($id);
            if (!$PortfiloModel) {
                return response()->json([
                    'status' => false,
                    'message' => 'Portfolio item not found'
                ], 404);
            }
        } else {
            $PortfiloModel = new PortfiloModel();
        }

        // Handle image upload (required for new, optional for edit)
        if ($request->hasFile('image') && $request->file('image')->isValid()) {
            // Delete old image if exists (check both locations)
            if (!empty($PortfiloModel->img)) {
                if (file_exists(public_html_path($PortfiloModel->img))) {
                    unlink(public_html_path($PortfiloModel->img));
                } elseif (file_exists(public_path($PortfiloModel->img))) {
                    unlink(public_path($PortfiloModel->img));
                }
            }

            $file = $request->file('image');
            $filename = time() . '_' . $file->getClientOriginalName();
            
            // Upload to public_html for GoDaddy compatibility
            $uploadDir = public_html_path('uploads/portfolio');
            if (!is_dir($uploadDir)) {
                mkdir($uploadDir, 0755, true);
            }
            $file->move($uploadDir, $filename);
            $PortfiloModel->img = 'uploads/portfolio/' . $filename;
        } elseif (!$id && !$request->hasFile('image')) {
            return response()->json([
                'status' => false,
                'message' => 'Image is required for new portfolio items'
            ], 422);
        }

        // Set creator safely
        if (session('user') && isset(session('user')->id)) {
            $PortfiloModel->createdby = session('user')->id;
        }
        $PortfiloModel->name=$name;
        $PortfiloModel->save();

        return response()->json([
            'status' => true,
            'message' => $id ? 'Partner updated successfully' : 'Partner added successfully',
            'image_path' => $PortfiloModel->img
        ]);
    }
    public function deleteportfiloModel(Request $request)
    {
        $sales_ledgerModel = new PortfiloModel();
        $salesleger = $sales_ledgerModel->where('id', $request->id)->orderBy('id', 'DESC')->first();
        if (!empty($salesleger)) {
            // Delete image file from disk (check both locations)
            if (!empty($salesleger->img)) {
                if (file_exists(public_html_path($salesleger->img))) {
                    unlink(public_html_path($salesleger->img));
                } elseif (file_exists(public_path($salesleger->img))) {
                    unlink(public_path($salesleger->img));
                }
            }
            $salesleger->delete();
            $response["status"] = true;
        } else {
            $response["status"] = false;
        }
        return response()->json($response);
    }
    public function portfiloedit(Request $request)
    {
        if ($request->ajax()) {

            $sales_ledgerModel = new PortfiloModel();
            $leadsdetails = $sales_ledgerModel->where('id', $request->id)->orderBy('id', 'DESC')->first();
            return response()->json($leadsdetails);
        }
    }

    //FundPDF
    public function fundpdf()
    {
        $newpaper = FundPdfModel::orderBy('id', 'desc')->get();
        return view('admin.fundpdf', compact('newpaper'));
    }
    public function savefundpdf(Request $request)
    {
        // ✅ Fixed validation
        $request->validate([
            'id' => 'nullable|integer',
            'name' => 'required|string|max:255',
            'image' => 'nullable|file|mimes:pdf|max:5120', // PDF
            'filename1' => 'required|string|max:255',
        ]);

        $id = $request->id;

        // ✅ Fix null handling - proper model initialization
        $NewpaperModel = null;
        if ($id) {
            $NewpaperModel = FundPdfModel::find($id);
            if (!$NewpaperModel) {
                return response()->json([
                    'status' => false,
                    'message' => 'Newsletter not found'
                ], 404);
            }
        } else {
            $NewpaperModel = new FundPdfModel();
        }

        $NewpaperModel->type = $request->name;

        /* ===== PDF FILE ===== */
        if ($request->hasFile('image') && $request->file('image')->isValid()) {
            // Delete old PDF if exists (check both locations)
            if (!empty($NewpaperModel->file)) {
                if (file_exists(public_html_path($NewpaperModel->file))) {
                    unlink(public_html_path($NewpaperModel->file));
                } elseif (file_exists(public_path($NewpaperModel->file))) {
                    unlink(public_path($NewpaperModel->file));
                }
            }

            $file = $request->file('image');
            $filename = time() . '_' . $file->getClientOriginalName();
            
            // Upload to public_html for GoDaddy compatibility
            $uploadDir = public_html_path('uploads/fundpdf');
            if (!is_dir($uploadDir)) {
                mkdir($uploadDir, 0755, true);
            }
            $file->move($uploadDir, $filename);
            $NewpaperModel->file = 'uploads/fundpdf/' . $filename;
        }
        // Set creator safely
        if (session('user') && isset(session('user')->id)) {
            $NewpaperModel->createdby = session('user')->id;
        }
        $NewpaperModel->name=$request->filename1;
        $NewpaperModel->save();

        return response()->json([
            'status' => true,
            'message' => $id ? 'Newsletter updated successfully' : 'Newsletter added successfully',
            'file' => $NewpaperModel->file,
        ]);
    }

    public function deletefundpdf(Request $request)
    {
        $sales_ledgerModel = new FundPdfModel();
        $salesleger = $sales_ledgerModel->where('id', $request->id)->orderBy('id', 'DESC')->first();
        if (!empty($salesleger)) {
            // Delete PDF file from disk (check both locations)
            if (!empty($salesleger->file)) {
                if (file_exists(public_html_path($salesleger->file))) {
                    unlink(public_html_path($salesleger->file));
                } elseif (file_exists(public_path($salesleger->file))) {
                    unlink(public_path($salesleger->file));
                }
            }
            $salesleger->delete();
            $response["status"] = true;
        } else {
            $response["status"] = false;
        }
        return response()->json($response);
    }
    public function fundpdfedit(Request $request)
    {
        if ($request->ajax()) {

            $sales_ledgerModel = new FundPdfModel();
            $leadsdetails = $sales_ledgerModel->where('id', $request->id)->orderBy('id', 'DESC')->first();
            return response()->json($leadsdetails);
        }
    }
}
