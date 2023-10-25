import fs from 'fs';
import ejs from 'ejs';
import { IResetPasswordParams } from '@user/interfaces/user.interface';

class ResetPasswordTemplate {
   public passwordResetConfirmationTemplate(templateParams: IResetPasswordParams): string {
     const { username, email, ipaddress, date} = templateParams;
      return ejs.render(fs.readFileSync(__dirname+ '/forgot-password-template.ejs', 'utf8'), {
        username,
        email,
        ipaddress,
        date,
        image_url: 'https://giveme5ive.com/assets/media/others/ux-designer.jpg'
      });
   }
}

export const resetPasswordTemplate: ResetPasswordTemplate = new ResetPasswordTemplate();
