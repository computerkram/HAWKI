<div class="modal"  id="data-protection"> 
	<div class="modal-panel">
        <div class="modal-content-wrapper">
            <div class="modal-content">
                <h1>{!! $translation["Guidelines"]; !!}</h1>
                 <div>
                    <p>
                        <a href="https://www.ph-freiburg.de/fileadmin/shares/Studium/Studienorganisation/Pruefungen/Doks_Abschlussarbeit/Allgemein/Hilfestellung_KI_wissenschaftliches_Arbeiten_endg.pdf" target="_blank" class="accentText">
                         {{ $translation["AI_Guidlines_PHFR"] }}
                        </a>
                     </p>
                 </div>
                 <div>
                     <p>
                        <a href="https://www.ph-freiburg.de/fileadmin/shares/Studium/Studienorganisation/Pruefungen/Doks_Abschlussarbeit/Allgemein/Eigenstaendigkeitserklaerung_2024_endg_1.pdf" target="_blank" class="accentText">
                         {{ $translation["Declaration_of_Authorship_PHFR"] }}
                        </a>
                     </p>
                </div>

		{!! $translation["_Guidelines_Content"]; !!}
                <br>
                
                <div class="modal-buttons-bar">
                    <button class="btn-lg-stroke align-end" onclick="logout()" >{{ $translation["Cancel"] }}</button>
                    <button class="btn-lg-fill align-end" onclick="modalClick(this)" >{{ $translation["Confirm"]; }}</button>
                </div>

                <br>
                <br>
            </div>
        </div>
	</div>
</div>
