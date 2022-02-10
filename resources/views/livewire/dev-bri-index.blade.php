<div>
    {{-- Do your work, then step back. --}}
        <div class="">
          <div class="form-control">
            <label class="bmd-label-floating">customer_code</label>
            <input type="text" class="form-control input input-bordered" wire:model="custCode">
            @error('custCode') <span class="error">{{ $message }}</span> @enderror
          </div>
        </div>

        <div class="">
            <div class="form-control">
              <label class="bmd-label-floating">ammount</label>
              <input type="text" class="form-control input input-bordered" wire:model="ammount">
              @error('ammount') <span class="error">{{ $message }}</span> @enderror
            </div>
          </div>


          <div class="">
            <div class="form-control">
              <label class="bmd-label-floating">nama</label>
              <input type="text" class="form-control input input-bordered" wire:model="nama">
              @error('nama') <span class="error">{{ $message }}</span> @enderror
            </div>
          </div>


          <div class="">
            <div class="form-control">
              <label class="bmd-label-floating">keterangan</label>
              <input type="text" class="form-control input input-bordered" wire:model="keterangan">
              @error('keterangan') <span class="error">{{ $message }}</span> @enderror
            </div>
          </div>


          <div class="">
            <div class="form-control">
              <label class="bmd-label-floating">expiredDate</label>
              <input type="text" class="form-control input input-bordered" wire:model="expiredDate">
              @error('expiredDate') <span class="error">{{ $message }}</span> @enderror
            </div>
          </div>

          <div class="">
            <div class="form-control">
              <label class="bmd-label-floating">statusBayar</label>
              <input type="text" class="form-control input input-bordered" wire:model="statusBayar">
              @error('statusBayar') <span class="error">{{ $message }}</span> @enderror
            </div>
          </div>

          <div class="">
            <div class="form-control">
              <label class="bmd-label-floating">start_date</label>
              <input type="text" class="form-control input input-bordered" wire:model="start_date">
              @error('start_date') <span class="error">{{ $message }}</span> @enderror
            </div>
          </div>

          <div class="">
            <div class="form-control">
              <label class="bmd-label-floating">end_date</label>
              <input type="text" class="form-control input input-bordered" wire:model="end_date">
              @error('end_date') <span class="error">{{ $message }}</span> @enderror
            </div>
          </div>

          <div class="">
            <div class="form-control">
              <label class="bmd-label-floating">start_time</label>
              <input type="text" class="form-control input input-bordered" wire:model="start_time">
              @error('start_time') <span class="error">{{ $message }}</span> @enderror
            </div>
          </div>

          <div class="">
            <div class="form-control">
              <label class="bmd-label-floating">end_time</label>
              <input type="text" class="form-control input input-bordered" wire:model="end_time">
              @error('end_time') <span class="error">{{ $message }}</span> @enderror
            </div>
          </div>
          
        <button type="button" class="btn btn-primary" wire:click="getVa()">Get VA</button>
        <button type="button" class="btn btn-primary" wire:click="getStatusVa()">Get Status VA</button>
        <button type="button" class="btn btn-primary" wire:click="buatVa()">Buat VA</button>
        <button type="button" class="btn btn-primary" wire:click="updateVa()">Update VA</button>
        <button type="button" class="btn btn-primary" wire:click="updateStatusVa()">Update Status VA</button>
        <button type="button" class="btn btn-primary" wire:click="deleteVa()">Delete VA</button>
        <button type="button" class="btn btn-primary" wire:click="getReport()">Get Report</button>
        <button type="button" class="btn btn-primary" wire:click="getReportTime()">Get Report Time</button>
        <div class="clearfix"></div>

        <div class="" wire:ignore>
            <div class="form-control">
              <label class="bmd-label-floating">Result</label>
              <textarea type="text" class="form-control textarea  textarea-bordered" wire:model="result" rows="10" name="des" id="des"></textarea>
              @error('result') <span class="error">{{ $message }}</span> @enderror
            </div>
      </div>
</div>

@push('scripts')
    <script>
        window.livewire.on('desUpdate', desc => {
            console.log(desc);
                document.getElementById("des").value = desc;
            })
    </script>
@endpush