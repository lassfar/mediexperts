<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf_token" content="{{ csrf_token() }}" />
    <script src={{ asset('js/jquery.js') }}></script>
</head>

<body>

  <style>
    .paper {
      padding:20px; height:27.9cm; width:21cm;font-size:14px; padding-left:.25px;
    }
    input { width:100%; padding: .2rem; border: none !important; outline: none !important; }
    input { word-wrap: break-all; }
    input[type=radio] { outline: 1px solid #000; }
    input[type="text"] { background-color: #fff; }
    table {
      border: 1px solid #000;
      border-collapse: collapse;
      width: 100%;
      text-align: center;
    }
    td, tr, th {
      border: 1px solid #000;
      padding: .5rem;
    }
    .border-none { border: none !important; }
    .flex-row {
      display: flex;
      flex-flow: row wrap;
    }
    .flex-column {
        display: flex; flex-flow: column nowrap;
        justify-content: center; align-items: center;
        text-align: center;
    }
    .d-none { display: none; }
    .container { width: 100% !important; }
    .bordered { border: 1px solid #000; padding: .2rem; }
    .highlighted { background-color: #ffff99 !important; }
    .text-bold { font-weight: 600; }
    .text-center { text-align: center !important; }
    .bu-print {
      padding:0; margin:0 0 50px 0;
      display: inline-block; width:47%; height:50px;
      color:#393939; background: linear-gradient(to right, #393939 50%, #fff 50%);
      background-size: 200% 100%;
      background-position: right;
      border-radius:5px; text-align:center; line-height:1.75;
      font-size:25px; font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; text-decoration:none;
      border: 2px solid #393939;
      transition: .2s all ease-out;
    }
    #footer {
        display: none !important;
    }
    .bu-print:hover {
      color: #fff;
      background-color: #393939;
      border-radius: 10px;
      background-position: left;
    }
    @media print {
      .hide-from-print { display: none; }
      .highlighted { background-color: #fff !important; }
      .display-in-print { display: inline-block !important; }
      #footer {
          display: flex !important;
      }
    }
</style>

<div class="hide-from-print">
  <div style="display:flex; justify-content:space-between;">
    <a class="bu-print" id="" href="/formation">Retour</a>
    <a class="bu-print" id="buPrintM4" href="#" onclick="window.print()">Imprimer le formulaire</a>
  </div>
</div>

<div class="" style="font-family:Calibri, 'Segoe UI', Geneva, Verdana, sans-serif; background-color: #fff;">

  <div style="width:100%; height:130px;"><!--space--></div>

  <input type="hidden" id="idForm" value="{{$formation->id_form}}" readonly>
  <table>
    <tr>
      <th style="width:40%;">Entreprise</th>
      <th>Facture N°</th>
      <th>Date</th>
    </tr>
    <tr>
      <td class="flex-column border-none">
        <strong class="">
          {{ $formation["raisoci"] }}
        </strong>
        <span class="text-center">
            ICE
            {{ $formation["ice"] }}
        </span>
      </td>
      <td>
        <input class="highlighted text-center" type="text" name="n_facture" id="nFacture" value="{{$formation->n_facture}}" style="font-size: 15px; font-family:Calibri">
        <button class="hide-from-print" id="saveBtn">Enregistrer</button>
      </td>

      <td>
          {{-- date facture --}}
          <input type="date" name="dtFacture" id="dtFacture" class="text-center" value={{($formation['dt_facture'] != null) ? $formation['dt_facture'] : $formation['dt_fin']}}>
      </td>
    </tr>
    <tr>
      <th>Lieu de formation</th>
      <th colspan="2">{{ $formation["lieu"] }}</th>
    </tr>
  </table>

  <div style="width:100%;height:10px;"><!--space--></div>

  <table>
    <tr>
      <th style="width:40%;">THEMES</th>
      <th style="width:25%;">Jours réels de formation par groupe</th>
      <th style="width:15%;">Nbre de bénéficiaires</th>
      <th style="width:20%;">Montant HT / Jour</th>
    </tr>
    <tr>
      <td>{{ $formation["nom_theme"] }}</td>
      <td>
        @if ($formation["date1"] != null) <p class="dates"> {{ Carbon\Carbon::parse($formation["date1"])->format('d/m/Y') }}</p> @endif
        @if ($formation["date2"] != null) <p class="dates"> {{ Carbon\Carbon::parse($formation["date2"])->format('d/m/Y') }}</p> @endif
        @if ($formation["date3"] != null) <p class="dates"> {{ Carbon\Carbon::parse($formation["date3"])->format('d/m/Y') }}</p> @endif
        @if ($formation["date4"] != null) <p class="dates"> {{ Carbon\Carbon::parse($formation["date4"])->format('d/m/Y') }}</p> @endif
        @if ($formation["date5"] != null) <p class="dates"> {{ Carbon\Carbon::parse($formation["date5"])->format('d/m/Y') }}</p> @endif
        @if ($formation["date6"] != null) <p class="dates"> {{ Carbon\Carbon::parse($formation["date6"])->format('d/m/Y') }}</p> @endif
        @if ($formation["date7"] != null) <p class="dates"> {{ Carbon\Carbon::parse($formation["date7"])->format('d/m/Y') }}</p> @endif
        @if ($formation["date8"] != null) <p class="dates"> {{ Carbon\Carbon::parse($formation["date8"])->format('d/m/Y') }}</p> @endif
        @if ($formation["date9"] != null) <p class="dates"> {{ Carbon\Carbon::parse($formation["date9"])->format('d/m/Y') }}</p> @endif
        @if ($formation["date11"] != null) <p class="dates"> {{ Carbon\Carbon::parse($formation["date10"])->format('d/m/Y') }}</p> @endif
        @if ($formation["date12"] != null) <p class="dates"> {{ Carbon\Carbon::parse($formation["date11"])->format('d/m/Y') }}</p> @endif
        @if ($formation["date13"] != null) <p class="dates"> {{ Carbon\Carbon::parse($formation["date6"])->format('d/m/Y') }}</p> @endif
        @if ($formation["date14"] != null) <p class="dates"> {{ Carbon\Carbon::parse($formation["date4"])->format('d/m/Y') }}</p> @endif
        @if ($formation["date15"] != null) <p class="dates"> {{ Carbon\Carbon::parse($formation["date5"])->format('d/m/Y') }}</p> @endif
        @if ($formation["date16"] != null) <p class="dates"> {{ Carbon\Carbon::parse($formation["date6"])->format('d/m/Y') }}</p> @endif
        @if ($formation["date17"] != null) <p class="dates"> {{ Carbon\Carbon::parse($formation["date4"])->format('d/m/Y') }}</p> @endif
        @if ($formation["date18"] != null) <p class="dates"> {{ Carbon\Carbon::parse($formation["date5"])->format('d/m/Y') }}</p> @endif
        @if ($formation["date19"] != null) <p class="dates"> {{ Carbon\Carbon::parse($formation["date6"])->format('d/m/Y') }}</p> @endif
        @if ($formation["date20"] != null) <p class="dates"> {{ Carbon\Carbon::parse($formation["date4"])->format('d/m/Y') }}</p> @endif
        @if ($formation["date21"] != null) <p class="dates"> {{ Carbon\Carbon::parse($formation["date5"])->format('d/m/Y') }}</p> @endif
        @if ($formation["date22"] != null) <p class="dates"> {{ Carbon\Carbon::parse($formation["date6"])->format('d/m/Y') }}</p> @endif
        @if ($formation["date23"] != null) <p class="dates"> {{ Carbon\Carbon::parse($formation["date4"])->format('d/m/Y') }}</p> @endif
        @if ($formation["date24"] != null) <p class="dates"> {{ Carbon\Carbon::parse($formation["date5"])->format('d/m/Y') }}</p> @endif
        @if ($formation["date25"] != null) <p class="dates"> {{ Carbon\Carbon::parse($formation["date6"])->format('d/m/Y') }}</p> @endif
      </td>
      <td>{{ $formation["nb_benif"] }}</td>
      <td>{{ $formation["bdg_jour"] }} DH</td>
    </tr>
    <tr>
      {{-- <th colspan="2"></th> --}}
      <th colspan="3">TOTAL H.T</th>
      <th>{{ $formation["bdg_total"] }} DH</th>
    </tr>
    <tr>
      {{-- <th colspan="2"></th> --}}
      <th colspan="3">TVA 20%</th>
      <th>{{ ($formation["bdg_total"] * .2) }} DH</th>
    </tr>
    <tr>
      {{-- <th colspan="2"></th> --}}
      <th colspan="3">TOTAL TTC</th>
      <th>{{ ($formation["bdg_total"] * .2 + $formation["bdg_total"]) }} DH</th>
    </tr>
    <tr>
      <th colspan="3">QUOTE PART OFFPT TIERS PAYANT H.T</th>
      {{-- <th></th> --}}
      <th>{{ $formation["bdg_total"] * .7 }} DH</th>
    </tr>
    <tr>
      <th colspan="3" rowspan="2">QUOTE PART ENTREPRISE TTC<br/>(30% du montant H.T + TVA du montant global)</th>
      {{-- <th rowspan="2"></th> --}}
      <th rowspan="2">{{ ($formation["bdg_total"] * .3 + $formation["bdg_total"] * .2) }} DH</th>
    </tr>
  </table>

  <div style="width:100%; height:30px;"><!--space--></div>

  <div class="container">
    <span class="text-bold">Arrêtée la présente facture à la somme de : </span>
    <input type="text" id="montant_text" class="highlighted" value="@php if ($formation["bdg_letter"]) echo (mb_strtoupper($formation["bdg_letter"])." DIRHAMS"); else echo ""; @endphp" style="display: inline !important; width:50%" readonly>
  </div>

  <div style="width:100%; height:20px;"><!--space--></div>

  <div class="container">
    <span class="text-bold">Mode et référence de paiement : </span>
    <input type="text" id="type_paiement_ref" class="highlighted" placeholder="........" style="display: inline !important; width:50%">
  </div>

  <div style="width:100%; height:25px;"><!--space--></div>


  <div id="footer" class="container" style="position:fixed !important; bottom:0; width:100%; padding-bottom:150px;">
    <p style="margin: 20px; margin-left: 60%">RAID SOUFIANE, Gérant Associé </p>
  </div>

</div>


{{-- script to print page --}}
<script type="text/javascript">
    $(document).ready(function () {
      // var {dates} = $('.dates').val();
      // $('.dates').forEach(curDate => {
      //   dates = DateFormat(curDate);

      // });
      $('#saveBtn').on('click', function() {
        var idForm = $('#idForm').val();
        var nFacture = $('#nFacture').val();
        var dtFacture = $('#dtFacture').val();
        console.log("idForm : "+idForm+" nFacture : "+nFacture, "dtFacture : "+dtFacture);
        $.ajax({
          type: 'POST',
          url: '{!! URL::to('/save-nfacture') !!}',
          data: {
            "_token": "{{ csrf_token() }}",
            'nFacture': nFacture, 'idForm': idForm, 'dtFacture': dtFacture
          },
          contentType: "application/x-www-form-urlencoded",
          success: function(data) {
            if (data[0].length == 0) { $('#saveBtn').html("Erreur"); }
            else {
              $('#saveBtn').html(data.msg);
              $('#saveBtn').css({
                outline: 'none',
                padding: '.4rem',
                backgroundColor: "#32CD32",
                color: "#ffffff",
                border: "none",
                boxShadow: '1px 2px 5px 2px #32CD3270'
              });
              // reset css btn after saving
              setTimeout(() => {
                $('#saveBtn').html("Enregistrer");
                $('#saveBtn').css({
                  outline: 'initial',
                  padding: '.4rem',
                  backgroundColor: "gray",
                  color: "#fff",
                  boxShadow: 'none'
                });
              }, 1000);
            }
            console.log(data);
          },
          error: (err) => { console.log(err); }
        });
      });
    });
</script>
{{-- ******************** --}}



</body>

</html>
