import { Component } from '@angular/core';

import { animations } from '../animations';
import { SessionFactory } from '../../../services/session';

@Component({
  moduleId: module.id,
  selector: 'minds-messenger-setup-chat',
  templateUrl: 'setup-chat.html',
  animations: animations,
})
export class MessengerSetupChat {
  open: boolean = true;
  attentionNeededTrigger: any;

  toggle() {
    this.open = !this.open;
  }

  openPane() {
    this.open = true;
    this.attentionNeededTrigger = Date.now();
  }
}
